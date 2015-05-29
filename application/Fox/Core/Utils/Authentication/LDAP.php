<?php
/************************************************************************
 * This file is part of FoxCRM.
 *
 * FoxCRM - Open Source CRM application.
 * Copyright (C) 2014-2015 Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * FoxCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * FoxCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with FoxCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/

namespace Fox\Core\Utils\Authentication;

use Fox\Core\Exceptions\Error,
    Fox\Core\Utils\Config,
    Fox\Core\ORM\EntityManager,
    Fox\Core\Utils\Auth;

class LDAP extends Base
{
    private $utils;

    private $zendLdap;

    /**
     * Fox => LDAP name
     *
     * @var array
     */
    private $fields = array(
        'userName' => 'cn',
        'firstName' => 'givenname',
        'lastName' => 'sn',
        'title' => 'title',
        'emailAddress' => 'mail',
        'phoneNumber' => 'telephonenumber',
    );

    public function __construct(Config $config, EntityManager $entityManager, Auth $auth)
    {
        parent::__construct($config, $entityManager, $auth);

        $this->zendLdap = new LDAP\LDAP();
        $this->utils = new LDAP\Utils($config);
    }

    protected function getZendLdap()
    {
        return $this->zendLdap;
    }

    protected function getUtils()
    {
        return $this->utils;
    }


    /**
     * LDAP login
     *
     * @param  string $username
     * @param  string $password
     * @param  \Fox\Entities\AuthToken $authToken
     * @return \Fox\Entities\User | null
     */
    public function login($username, $password, \Fox\Entities\AuthToken $authToken = null)
    {
        if ($authToken) {
            return $this->loginByToken($username, $authToken);
        }

        $options = $this->getUtils()->getZendOptions();

        $ldap = $this->getZendLdap();
        $ldap = $ldap->setOptions($options);

        try {
            $ldap->bind($username, $password);

            $dn = $ldap->getDn($username);

            $loginFilter = $this->getUtils()->getOption('userLoginFilter');
            $userData = $ldap->searchByLoginFilter($loginFilter, $dn, 3);

        } catch (\Zend\Ldap\Exception\LdapException $zle) {

            $admin = $this->adminLogin($username, $password);
            if (!isset($admin)) {
                $GLOBALS['log']->info('LDAP Authentication: ' . $zle->getMessage());
                return null;
            }

            $GLOBALS['log']->info('LDAP Authentication: Administrator login by username ['.$username.']');
        }

        $user = $this->getEntityManager()->getRepository('User')->findOne(array(
            'whereClause' => array(
                'userName' => $username,
            ),
        ));

        $isCreateUser = $this->getUtils()->getOption('createFoxUser');
        if (!isset($user) && $isCreateUser) {
            $this->getAuth()->useNoAuth(); /** Required to fix Acl "isFetched()" error */
            $user = $this->createUser($userData);
        }

        return $user;
    }

    /**
     * Login by authorization token
     *
     * @param  string $username
     * @param  \Fox\Entities\AuthToken $authToken
     * @return \Fox\Entities\User | null
     */
    protected function loginByToken($username, \Fox\Entities\AuthToken $authToken = null)
    {
        if (!isset($authToken)) {
            return null;
        }

        $userId = $authToken->get('userId');
        $user = $this->getEntityManager()->getEntity('User', $userId);

        $tokenUsername = $user->get('userName');
        if ($username != $tokenUsername) {
            $GLOBALS['log']->alert('Unauthorized access attempt for user ['.$username.'] from IP ['.$_SERVER['REMOTE_ADDR'].']');
            return null;
        }

        $user = $this->getEntityManager()->getRepository('User')->findOne(array(
            'whereClause' => array(
                'userName' => $username,
            ),
        ));

        return $user;
    }

    /**
     * Login user with administrator rights
     *
     * @param  string $username
     * @param  string $password
     * @return \Fox\Entities\User | null
     */
    protected function adminLogin($username, $password)
    {
        $hash = $this->getPasswordHash()->hash($password);

        $user = $this->getEntityManager()->getRepository('User')->findOne(array(
            'whereClause' => array(
                'userName' => $username,
                'password' => $hash,
                'isAdmin' => 1
            ),
        ));

        return $user;
    }

    /**
     * Create Fox user with data gets from LDAP server
     *
     * @param  array $userData LDAP entity data
     * @return \Fox\Entities\User
     */
    protected function createUser(array $userData)
    {
        $data = array();
        foreach ($this->fields as $espo => $ldap) {
            if (isset($userData[$ldap][0])) {
                $data[$espo] = $userData[$ldap][0];
            }
        }

        $user = $this->getEntityManager()->getEntity('User');
        $user->set($data);

        $this->getEntityManager()->saveEntity($user);

        return $user;
    }



}


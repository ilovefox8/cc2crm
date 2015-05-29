<?php
namespace Fox\Controllers;

use \Fox\Core\Exceptions\Error;
//use \Xmlrpc\Xmlrpc;
use xmlrpc_client;
use xmlrpcmsg;
use xmlrpcval;

class Callcenter extends \Fox\Core\Controllers\Base
{
	function actionMakeCall($params, $data, $request){

		$src = intval($request->get('src'));
		$dst = intval($request->get('dst'));

		$config = $this->getContainer()->get('config');
		
		$stateno=(integer)$HTTP_POST_VARS["stateno"];
		$f=new xmlrpcmsg('freeswitch.api',
		        array(new xmlrpcval("originate", "string"),new xmlrpcval("user/".$src." ".$dst, "string"))
		);
		$c=new xmlrpc_client("/RPC2", $config->get('callcenter_ip'), $config->get('callcenter_port'));
		$c->setCredentials($config->get('callcenter_username'),$config->get('callcenter_password'),NULL);

		// $c->setDebug(2); // Uncomment a Value of 1 Outputs Received XML, 
		                    // Gets you Both Sent and Returned XML
		$r=&$c->send($f);

		if(!$r->faultCode())
		{       
	        $v=$r->value();
	        //$foo = explode("\n" , $v->scalarval());
	        //if (preg_match_all('/-ERR/', $v->scalarval(), $matches)) {
	        $foo = explode(" ", trim($v->scalarval(), "\n"));
	        return array(
	        	'result' => $foo[0],
	        	'content' => $foo[1],
	        );
	        //}
	        
	        return $v->scalarval();
		} else {			
	        return array(
	        	'result'=> htmlspecialchars($r->faultCode()),
	        	'content'=> htmlspecialchars($r->faultString()),
	        	);
		}
		
	}
}
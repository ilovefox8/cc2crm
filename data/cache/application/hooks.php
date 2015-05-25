<?php

return array (
  'Common' => 
  array (
    'afterSave' => 
    array (
      0 => '\\Espo\\Hooks\\Common\\AssignmentEmailNotification',
      1 => '\\Espo\\Hooks\\Common\\Stream',
      2 => '\\Espo\\Hooks\\Common\\Notifications',
    ),
    'afterRemove' => 
    array (
      0 => '\\Espo\\Hooks\\Common\\Stream',
    ),
  ),
  'Note' => 
  array (
    'beforeSave' => 
    array (
      0 => '\\Espo\\Hooks\\Note\\Mentions',
    ),
    'afterSave' => 
    array (
      0 => '\\Espo\\Hooks\\Note\\Notifications',
    ),
  ),
);

?>
<?php
// This file generated by Propel 1.7.1 convert-conf target
// from XML runtime conf file C:\Program Files (x86)\Ampps\www\SitioWebND\dev\module\Propel\runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'sitiowebnd' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=nucleodediagnostico.local;dbname=sitiowebnd',
        'user' => 'root',
        'password' => 'mysql',
      ),
    ),
    'default' => 'sitiowebnd',
  ),
  'generator_version' => '1.7.1',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-sitiowebnd-conf.php');
return $conf;
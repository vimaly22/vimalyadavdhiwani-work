<?php


$db_user      = 'root';
$db_password = '';
$db_name = 'phprest';


$db =  new PDO('mysql:host=127.0.0.1;dbname='.$db_name.';charset=utf8',$db_user,$db_passowrd);
//set some db attributes
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
$db->setAttribute(PDO::ATTR_ERRMODE, PD0::ERRMODE_EXCEPTION);

define('APP_NAME', 'PHP REST API TUTORIAL');
?>
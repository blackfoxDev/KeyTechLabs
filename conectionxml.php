<?php
//database configuration
$config['mysql_host'] = "localhost:3306";
$config['mysql_user'] = "rocklee45";
$config['mysql_pass'] = "N@ruto45";
$config['db_name']    = "jtabletestdb2";
$config['table_name'] = "code";
 
//connect to host
mysql_connect($config['mysql_host'],$config['mysql_user'],$config['mysql_pass']);
//select database
@mysql_select_db($config['jtabletestdb2']) or die( "Unable to select database");
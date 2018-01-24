<?php
define('db_host' , 'mysql:host=localhost;dbname=code_DB');
define('db_name' , 'code_DB')
define('db_user', 'root');
define('db_pwd','');

$con = new mysqli(db_host,db_user,db_pwd,db_name);
?>
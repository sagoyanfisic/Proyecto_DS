<?php 
include "edit.php";
define('localhost', $host);
define('mibase',$user);
define('root', $pw);
define('root', $bd);
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
?>
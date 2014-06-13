<?php
error_reporting(-1); 
	include "../ajax/edit.php";  

$db = new mysqli($host,$user,$pw,$bd);
if ($db->connect_errno) {
	die ("<h1>Fallo al conectar a base de datos... (" . $db->connect_errno . ") " . $db->connect_error."</h1>");
}
?>
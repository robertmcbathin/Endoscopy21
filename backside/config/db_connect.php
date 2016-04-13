<?php 
$dbhost  = 'localhost';  
$dbname  = 'endoadmin'; 
$dbuser  = 'root';     
$dbpass  = '';     

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if($mysqli->connect_error)
{
  die('Connect error(' . $mysqli->connect_errno . ')' . $mysqli::connect_error);
}
$mysqli->query("SET NAMES 'utf8'");
$mysqli->set_charset('utf8');
?>

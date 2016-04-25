<?php 
//$dbhost  = '185.84.108.3';    // Unlikely to require changing    
//$dbname  = 'b79069_endoadmin'; // Modify these...                
//$dbuser  = 'u79069';     // ...variables according               
//$dbpass  = 'vxK2YJT7-m';     // ...to your installation          
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

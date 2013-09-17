<?php

$host="localhost";
$user="root";
$password="admin";
$database="hris";

$con = mysql_connect($host,$user,$password);

if (!$con){
  die('databse new  error' . mysql_error());
  }
mysql_select_db($database, $con);		
?>
        
<?php

$con = new mysqli("localhost","root","");
if($con->connect_error){
	echo "Error...";
	die;
}
$con->select_db("classd1");

?>
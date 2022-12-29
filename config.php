<?php
error_reporting(E_ALL);

$host='localhost';
$name='root';
$pass='';
$db='php2excel';

$link = mysqli_connect($host, $name, $pass, $db);

if(!$link)
{
	die('connection failed:'.mysqli_connect_error());
}
?>
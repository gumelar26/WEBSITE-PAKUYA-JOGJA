<?php
$server='localhost';//server MYSQL
$user='root';//username MYSQL
$password='';//Password MYSQL
$db='sim';//nama database

$conn=mysqli_connect($server, $user, $password);

if( !mysqli_select_db($conn,$db))
	{die(mysqli_error());}
?>
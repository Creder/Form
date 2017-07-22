<?php

$host = getenv('HOST');
$user = getenv('USER');
$password = getenv('PASSWORD');
$db = getenv('DB');

$link = new mysqli($host, $user, $password, $db);

if(mysqli_connect_errno($link))
{
		echo 'Failed to connect';
}
?>

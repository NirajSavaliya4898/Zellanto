<?php
session_start();
session_destroy();
if($username==$_POST['username'] and $password==md5($_POST['pass']))
{
	$username=$_POST['username'];
	$password=md5($_POST['pass']);
	setcookie('username','$username',time()+60*60*7);
	setcookie('password','$password',time()+60*60*7);
}
header("location:index.php");
?>
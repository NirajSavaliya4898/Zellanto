<?php
include("connection.php");
$qry="select * from user where user_name='".$_POST['username']."' and is_admin='1' and password='".md5($_POST['pass'])."'";
//echo $qry;
$result=mysqli_query($con,$qry);

if(mysqli_num_rows($result)>0)
{
	$_SESSION['uname']=$_POST['username'];
	
	header("location:dashboard.php");
}
else
{
	header("location:login.php");
}
?>
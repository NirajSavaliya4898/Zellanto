<?php
session_start();
include("connection.php");
if(isset($_POST['login']))
{
	$qry="select * from user where user_name='".$_POST['username']."' and is_admin='0' and password='".md5($_POST['pass'])."'";
	$result=mysqli_query($con,$qry);
	
	if(mysqli_num_rows($result)>0)
	{
		if(isset($_POST['remember']))
		{
			setcookie('username',$_POST['username'],time()+60*60*7);
			setcookie('password',md5($_POST['pass']),time()+60*60*7);
		}
		$lst=mysqli_fetch_array($result);
		$_SESSION['user_id']=$lst['user_id'];
		$_SESSION['user']=$_POST['username'];
		$_SESSION['login_success'] = 1;
		echo $_SESSION['user_id'];       
		//exit;
		if(!empty($_SESSION['iscart']))
		{
			header("location:order.php");	
		}
		else
		{`
			header("location:index.php#category_section");
		}
	}
	else
	{
		$_SESSION['login_fail'] = 1;
		header("location:index.php#category_section");
	}
}
?>
<?php
session_start();

$mail=$_POST['email'];
$pass=md5($_POST['password']);
$cpass=md5($_POST['confirm-password']);

	$qry="select * from user where email='".$_POST['mail']."' and password='".md5($_POST['pass'])."' and is_admin='0'";
	echo $qry;
	exit;
	if(mysqli_num_rows($result)>0)
	{
		if($pass != $cpass)
		{
			header("location:index.php?match=1");
		}
		if(mysqli_query($con,$qry))
		{
			$qry1="update user set
					password='$pass'";

			if(mysqli_query($con,$qry1))
			{
				header("location:myprofile.php#category_section");
			}	
			else
			{
				header("location:index.php#category_section");
				exit;
			}	 
		}	
	}
?>
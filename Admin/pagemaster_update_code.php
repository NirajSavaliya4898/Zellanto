<?php
include("connection.php");
$title=$_POST['pagetitle'];
$cont=$_POST['contain'];
$qry="update pagemaster set
			page_title='$title',
			contain='$cont'
			where page_id=".$_POST['hdnpid']; 
			//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:pagemaster.php");
}
else
{
	echo mysqli_error($con);
}
?>
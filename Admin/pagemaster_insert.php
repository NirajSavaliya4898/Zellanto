<?php
include("connection.php");
$title=$_POST['pagetitle'];
$cont=$_POST['contain'];
if(!(empty($title) && empty($cont)))
{
	$qry="insert into pagemaster(page_title,contain)
		values('$title','$cont')";
}
else
{
	header("location:pagemasterform.php?error=1");
}
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
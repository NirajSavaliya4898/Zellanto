<?php
session_start();
include("connection.php");

$title=$_POST['title'];
$stitle=$_POST['subtitle'];
$mediaid=$_POST['txtmid'];
$btext=$_POST['btntext'];
$burl=$_POST['btnurl'];
if(!(empty($title) && empty($subtitle) && empty($btntext) && empty($btnurl)))
{
	$qry="insert into slider
		(title,sub_title,media_id,btn_text,btn_url)
		values('$title','$stitle','$mediaid','$btext','$burl')";
}
else{
	header("location:sliderform.php?error=1");
	exit;
}


		//echo $qry;
if(mysqli_query($con,$qry))
{
	unset($_SESSION['last_id'])
	header("location:slider.php");
}
else
{
	echo mysqli_error ($con);
}
?>
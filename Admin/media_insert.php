<?php
include("connection.php");
$url=$_FILES['mediaurl']['name'];
$title=$_POST['mediatitle'];
$des=$_POST['desc'];
$_FILES['mediaurl']['tmp_name'];

$qry="insert into media(media_url,media_title,description)
		values('$url','$title','$des')";

if(!(empty($url) && empty($title)))
{
	if(move_uploaded_file($_FILES['mediaurl']['tmp_name'],"../Admin/media/".$_FILES['mediaurl']['name']))
	{
		$qry="insert into media(media_url,media_title,description)
			values('$url','$title','$des')";
	}
	else
	{
		// header("location:mediaform.php?error=1");
		exit;
	}
}
		//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:media.php"); 
}
else
{
	echo mysqli_error ($con);
}
?>
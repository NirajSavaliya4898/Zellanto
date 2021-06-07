<?php
include("connection.php");

$title=$_POST['mediatitle'];
$des=$_POST['desc'];
echo $_FILES['mediafile']['name'];
if(!empty($_FILES['mediafile']['name']))
{
	$url=$_FILES['mediafile']['name'];
	move_uploaded_file($_FILES['mediafile']['tmp_name'],"../Admin/media/".$_FILES['mediafile']['name']);
	
}
else
{
	$url=$_POST["mediaurl"];
}
$qry="update media set
			media_url='$url',
			media_title='$title',
			description='$des'
			where media_id=".$_POST['hdnmid']; 
			echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:media.php");
}
else
{
	echo mysqli_error($con);
}
?>
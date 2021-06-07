<?php
include("connection.php");

$name=$_POST['catname'];
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
$qry="update category set
			cat_name='$name',
			description='$des',
			media_url='$url'
			where cat_id=".$_POST['hdncid']; 
			echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:category.php");
}
else
{
	echo mysqli_error($con);
}
?>
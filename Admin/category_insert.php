<?php
session_start();
include("connection.php");
$name=$_POST['catname'];
$des=$_POST['desc'];
$url=$_FILES['mediaurl']['name'];
echo $_FILES['url']['tmp_name'];
if(!(empty($catname) && empty($des) && empty($des)))
{
	if(move_uploaded_file($_FILES['mediaurl']['tmp_name'],"../Admin/media/".$_FILES['mediaurl']['name']))
	{
		$qry="insert into category(cat_name,description,media_url)values('$name','$des','$url')";
	}
	else
	{
		header("location:category_insert.php?error=1");
		exit;
	}
}
		//echo $qry;
if(mysqli_query($con,$qry))
{
	unset($_SESSION['last_id'])
	header("location:category.php");
}
else
{
	echo mysqli_error ($con);
}
?>
<?php
include("connection.php");
$name=$_GET['brandname'];
$desc=$_GET['desc'];
$brandusefor=$_GET['buf'];
if(!(empty($name) && empty($brandusefor)))
{
	$qry="insert into brand(name,description,brandusefor)
		values('$name','$desc','$brandusefor')";
}
else{
	header("location:brandform.php?error=1");
	exit;
}


		//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:brand.php");
}
else
{
	echo mysqli_error($con);
}
?>
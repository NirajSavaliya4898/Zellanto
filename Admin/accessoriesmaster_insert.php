<?php
include("connection.php");
$acccat=$_POST['acccat'];
$desc=$_POST['des'];
if(!(empty($acccat)))
{
	$qry="insert into accessoriesmaster(acc_cat,description)
		values('$acccat','$desc')";
}
else{
	header("location:accessoriesmasterform.php?error=1");
	exit;
}
		//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:accessoriesmaster.php");
}
else
{
	echo mysqli_error($con);
}
?>
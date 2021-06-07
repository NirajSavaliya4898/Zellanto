<?php
include("connection.php");
$acccat=$_POST['acccat'];
$desc=$_POST['des'];
$qry="update accessoriesmaster set
			acc_cat='$acccat',
			description='$desc'
			where Acc_cat_id=".$_POST['hdnaid']; 
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
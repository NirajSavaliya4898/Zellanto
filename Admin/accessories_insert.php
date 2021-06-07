<?php
include("connection.php");
$accname=$_POST['accname'];
$acccatid=$_POST['acccatid'];
$mid=$_POST['txtmid'];
$bid=$_POST['brandid'];
$warr=$_POST['warranty'];
$des1=$_POST['des1'];
$des2=$_POST['des2'];
$pri=$_POST['price'];
if(!(empty($accname) && empty($acccatid) && empty($mediaid) && empty($brandid) && empty($acccatid) && empty($warr) && empty($des1) && empty($des2) && empty($pri)))
{
	$qry="insert into accessories(acc_name,acc_cat_id,brand_id,media_id,warranty,description1,description2,price)
		values('$accname','$acccatid','$mid','$bid','$warr','$des1','$des2','$pri')";	
}
else
{
	header("location:accessoriesform.php?error=1");
}


	//echo $qry;
if(mysqli_query($con,$qry))
{
	unset($_SESSION['last_id']);
	header("location:accessories.php");
}
else
{
	echo mysqli_error($con);
}
?>
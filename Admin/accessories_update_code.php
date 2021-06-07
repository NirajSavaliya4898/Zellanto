<?php
include("connection.php");
$accname=$_POST['accname'];
$acccatid=$_POST['acccatid'];
$mediaid=$_POST['txtmid'];
$brandid=$_POST['brandid'];
$warr=$_POST['warranty'];
$des1=$_POST['des1'];
$des2=$_POST['des2'];
$pri=$_POST['price'];
$qry="update accessories set
			acc_name='$accname',
			acc_cat_id='$acccatid',
			brand_id='$brandid',
			media_id='$mediaid',
			warranty='$warr',
			description1='$des1',
			description2='$des2',
			price='$pri'
			where Acc_id=".$_POST['hdnaid']; 
			//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:accessories.php");
}
else
{
	echo mysqli_error($con);
}
?>
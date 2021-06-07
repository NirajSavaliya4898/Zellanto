<?php
include("connection.php");

$lname=$_POST['lensename'];
$bid=$_POST['brandid'];
$mid=$_POST['txtmid'];
$fsize=$_POST['filtersize'];
$max=$_POST['maxaperature'];
$warr=$_POST['warranty'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$qry="update lenses set
			lense_name='$lname',
			brand_id='$bid',
			media_id='$mid',
			filtersize='$fsize',
			maxaperature='$max',
			warranty='$warr',
			description='$desc',
			price='$price'
			where lense_id=".$_POST['hdnlid']; 
			//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:lense.php");
}
else
{
	echo mysqli_error($con);
}
?>
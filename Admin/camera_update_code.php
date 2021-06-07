<?php
include("connection.php");

$cname=$_POST['camname'];
$bid=$_POST['brandid'];
$mid=$_POST['txtmid'];
$des1=$_POST['desc1'];
$des2=$_POST['desc2'];
$des3=$_POST['desc3'];
$warr=$_POST['warranty'];
$bprice=$_POST['price'];

$qry="update camera set
			cam_name='$cname',
			brand_id='$bid',
			media_id='$mid',
			description1='$des1',
			description2='$des2',
			description3='$des3',
			warranty='$warr',
			price='$bprice'
			where cam_id=".$_POST['hdncid']; 
			echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:camera.php");
}
else
{
	echo mysqli_error($con);
}
?>
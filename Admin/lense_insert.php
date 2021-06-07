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
if(!(empty($lname) && empty($bid) && empty($mid) && empty($fsize) && empty($max) && empty($warr) && empty($desc) && empty($price)))
{
	$qry="insert into lenses
		(lense_name,brand_id,media_id,filtersize,maxaperature,warranty,description,price)
		values('$lname','$bid','$mid','$fsize','$max','$warr','$desc','$price')";
		echo $qry;
}
else
{
	header("location:lenseform.php?error=1");
}
		//echo $qry;
if(mysqli_query($con,$qry))
{
	unset($_SESSION['last_id']);
	header("location:lense.php");
}
else
{
	echo mysqli_error ($con);
}
?>
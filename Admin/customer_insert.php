<?php
include("connection.php");

$name=$_POST['name'];
$number=$_POST['number'];
$add=$_POST['add'];
$pincode=$_POST['pincode'];
$locality=$_POST['locality'];
$city=$_POST['city'];
$state=$_POST['state'];
$landmark=$_POST['landmark'];
$acontact=$_POST['acontact'];

if(!(empty($name) && empty($add) && empty($pincode) && empty($city) && empty($state) && empty($number) && empty($acontact)))
{
	$qry="insert into customer(name,address,locality,pincode,city,landmark,state,contact,alternateno)
		values('$name','$add','$locality','$pincode','$city','$landmark','$state','$number','$acontact')";
}
else
{
	header("location:customerform.php?error=1");
	exit;
}

//$result=mysqli_query($con,$qry);
		echo $qry;


if(mysqli_query($con,$qry))
{
	header("location:customer.php");
}
else
{
	echo mysqli_error ($con);
}
?>
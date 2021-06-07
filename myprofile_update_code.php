<?php
session_start();
include("connection.php");

$name=$_POST['name'];
$num=$_POST['number'];
$ad=$_POST['add'];
$pincod=$_POST['pincode'];
$local=$_POST['locality'];
$cty=$_POST['city'];
$stat=$_POST['state'];
$landmar=$_POST['landmark'];
$contact=$_POST['acontect'];
$password=md5($_POST['pass1']);

if(!empty($_POST['hdnmid']))
{
	echo "Update";
	
	$qry1="update customer set
			name='$name',
			contact='$num',
			address='$ad',
			pincode='$pincod',
			locality='$local',
			city='$cty',
			state='$stat',
			landmark='$landmar',
			alternateno='$contact'
			where user_id =".$_POST['hdnmid']; 
}
else
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$add=$_POST['add'];
	$pincode=$_POST['pincode'];
	$locality=$_POST['locality'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$landmark=$_POST['landmark'];
	$acont=$_POST['acontect'];

	$qry1="insert into customer(name,contact,address,pincode,locality,city,state,landmark,alternateno,user_id)
		values('$name','$number','$add','$pincode','$locality','$city','$state','$landmark','$acont','".$_SESSION['user_id']."')";
}
$qry2="update user set
		password='$password'
		where user_name='".$_SESSION['user']."'";

if(mysqli_query($con,$qry1) and mysqli_query($con,$qry2))
{   
	if ($_POST['order']=="orderpage")
	{
		header("location:order.php");
	}
	else
	{
		header("location:myprofile.php");
	}
}
else
{
	echo mysqli_error($con);
}
?>
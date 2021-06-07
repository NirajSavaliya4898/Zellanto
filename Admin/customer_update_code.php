<?php
include("connection.php");

$name=$_POST['name'];
$num=$_POST['number'];
$ad=$_POST['add'];
$pincod=$_POST['pincode'];
$localit=$_POST['locality'];
$cty=$_POST['city'];
$stat=$_POST['state'];
$landmar=$_POST['landmark'];
$contact=$_POST['acontact'];

$qry="update customer set
			name='$name',
			contact='$num',
			address='$ad',
			pincode='$pincod',
			locality='$localit',
			city='$cty',
			state='$stat',
			landmark='$landmar',
			alternateno='$contact'
			where Cust_id=".$_POST['hdnaid']; 
			//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:customer.php");
}
else
{
	echo mysqli_error($con);
}
?>
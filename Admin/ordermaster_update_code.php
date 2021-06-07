<?php
include("connection.php");

$cust=$_POST['custid'];
$dat=$_POST['date'];
$mode=$_POST['paymentmode'];
$cgs=$_POST['cgst'];
$sgs=$_POST['sgst'];
$pri=$_POST['price'];
$qty=$_POST['totalqty'];
$total=$_POST['totalprice'];
$status=$_POST['orderstatus'];

$qry="update ordermaster set
			cust_id='$cust',
			date='$dat',
			pay_mode='$mode',
			cgst='$cgs',
			sgst='$sgs',
			price='$pri',
			totalqty='$qty',
			totalprice='$total',
			order_status='$status'
			where order_id=".$_POST['hdnoid']; 
			//echo $qry;

if(mysqli_query($con,$qry))
{
	header("location:ordermaster.php");
}
else
{
	echo mysqli_error($con);
}
?>
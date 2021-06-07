<?php
include("connection.php");
$qry="delete from customer where cust_id=".$_REQUEST['cid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:customer.php");
}
else
{

	echo mysqli_error($con);
}
?>
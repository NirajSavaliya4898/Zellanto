<?php
include("connection.php");
$qry="delete from ordermaster where order_id=".$_REQUEST['oid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:ordermaster.php");
}
else
{

	echo mysqli_error($con);
}
?>
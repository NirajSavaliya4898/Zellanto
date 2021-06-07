<?php
include("connection.php");
$qry="delete from contactus where cont_id=".$_REQUEST['cid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:contact.php");
}
else
{

	echo mysqli_error($con);
}
?>
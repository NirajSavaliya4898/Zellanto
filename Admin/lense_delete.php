<?php
include("connection.php");
$qry="delete from lenses where lense_id=".$_REQUEST['lid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:lense.php");
}
else
{

	echo mysqli_error($con);
}
?>
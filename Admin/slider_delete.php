<?php
include("connection.php");
$qry="delete from slider where slider_id=".$_REQUEST['sid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:slider.php");
}
else
{

	echo mysqli_error($con);
}
?>
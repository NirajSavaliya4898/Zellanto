<?php
include("connection.php");
$qry="delete from camera where cam_id=".$_REQUEST['cid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:camera.php");
}
else
{

	echo mysqli_error($con);
}
?>
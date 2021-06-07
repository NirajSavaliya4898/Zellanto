<?php
include("connection.php");
$qry="delete from accessories where Acc_id=".$_REQUEST['aid'];
//echo $qry;
if(mysqli_query($con,$qry))
{
	//echo "deleted";
	header("location:accessories.php");
}
else
{

	echo mysqli_error($con);
}
?>
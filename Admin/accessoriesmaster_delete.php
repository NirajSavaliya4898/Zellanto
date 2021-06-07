<?php
include("connection.php");
$qry="delete from accessoriesmaster where Acc_cat_id=".$_REQUEST['aid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:accessoriesmaster.php");
}
else
{

	echo mysqli_error($con);
}
?>
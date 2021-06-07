<?php
include("connection.php");

$qry="delete from category where cat_id=".$_REQUEST['cid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	unlink("../Admin/media/".$_REQUEST["url"]);
	header("location:category.php");
}
else
{

	echo mysqli_error($con);
}
?>
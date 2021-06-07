<?php
include("connection.php");
$qry="delete from brand where brand_id=".$_REQUEST['bid'];
//echo $qry;
if(mysqli_query($con,$qry))
{

	//echo "deleted";
	header("location:brand.php");
}
else
{

	echo mysqli_error($con);
}
?>
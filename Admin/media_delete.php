<?php
include("connection.php");
$qry="delete from media where media_id=".$_REQUEST['mid'];
echo $qry;
if(mysqli_query($con,$qry))
{

	// echo "deleted";
	unlink("../Admin/media/".$_REQUEST["url"]);
	header("location:media.php");
}
else
{

	echo mysqli_error($con);
}
?>
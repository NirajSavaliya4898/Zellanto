<?php
include("connection.php");

$name=$_POST['brandname'];
$desc=$_POST['desc'];
$brandusefor=$_POST['buf'];
$qry="update brand set
			name='$name',
			description='$desc',
			brandusefor='$brandusefor'
			where brand_id=".$_POST['hdnbid']; 
			//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:brand.php");
}
else
{
	echo mysqli_error($con);
}
?>
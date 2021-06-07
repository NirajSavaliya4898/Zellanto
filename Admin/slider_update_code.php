<?php
include("connection.php");

$title=$_GET['title'];
$stitle=$_GET['subtitle'];
$mediaid=$_GET['txtmid'];
$btext=$_GET['btntext'];
$burl=$_GET['btnurl'];

$qry="update slider set
			title='$title',
			sub_title='$stitle',
			media_id='$mediaid',
			btn_text='$btext',
			btn_url='$burl'
			where slider_id=".$_GET['hdnsid']; 
			//echo $qry;
if(mysqli_query($con,$qry))
{
	header("location:slider.php");
}
else
{
	echo mysqli_error($con);
}
?>
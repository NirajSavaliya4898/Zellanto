<?php
session_start();
$con=mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($con,"zellanto") or die("Could not select db");
$url=$_FILES['mediaurl']['name'];
$title=$_POST['mediatitle'];
$des=$_POST['desc'];
$_FILES['url']['tmp_name'];
if(!(empty($url) && empty($title)))
{
	if(move_uploaded_file($_FILES['mediaurl']['tmp_name'],"../Admin/media/".$_FILES['mediaurl']['name']))
	{
		$qry="insert into media(media_url,media_title,description)
		values('$url','$title','$des')";
	}
	else{
		header("location:media_insert.php?error=1");
		exit;
	}

}
		//echo $qry;
if(mysqli_query($con,$qry))
{ 

	$_SESSION['last_id'] = mysqli_insert_id($con);
	?>
	<script type="text/javascript">
		window.history.go(-1);
	</script>
<?php }
else
{
	echo mysqli_error ($con);
}

exit;
?>
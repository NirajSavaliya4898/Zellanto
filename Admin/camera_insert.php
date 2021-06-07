<!DOCTYPE html>
<html>
<!-- <?php
//session_start();
?>
 -->
<body>
<?php
include("connection.php");

$cname=$_POST['camname'];
$bid=$_POST['brandid'];
$mid=$_POST['txtmid'];
$des1=$_POST['desc1'];
$des2=$_POST['desc2'];
$des3=$_POST['desc3'];
$warr=$_POST['warranty'];
$bprice=$_POST['price'];

if(!(empty($cname) and  empty($bid) and empty($mid) and empty($des1) and empty($des2) and empty($des3) && empty($warr) && empty($bprice)))
{
	
	$qry="insert into camera
		(cam_name,brand_id,media_id,description1,description2,description3,warranty,price)
		values('$cname',$bid,$mid,'$des1','$des2','$des3','$warr','$bprice')";
		
}
else
{
	header("location:cameraform.php?error=1");
	exit;
}

		//echo $qry;
if(mysqli_query($con,$qry))
{
	unset($_SESSION['last_id']);
	header("location:camera.php");
}
else
{
	echo mysqli_error ($con);
}
?>
</body>
</html>
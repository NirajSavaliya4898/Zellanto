<?php
session_start();
include("connection.php");
include 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$email=$_POST['email'];
$qry="select * from user where email='".$_POST['email']."' and is_admin='0'";
//echo $qry;
$result=mysqli_query($con,$qry);

if(mysqli_num_rows($result)>0)
{
	if(mysqli_query($con,$qry))
	{
		// create object of PHPMailer class with boolean parameter which sets/unsets exception.
		    $mail = new PHPMailer(true);
		    try {
		        $mail->isSMTP();
		        $mail->Host = 'smtp.gmail.com';
		        $mail->SMTPAuth = true;
		        $mail->Username = 'njthummar0@gmail.com';
		        $mail->Password = '8673925519';
		        $mail->SMTPSecure = 'tls';
		        $mail->Port = 587;
		        //$mail->SMTPDebug = 3;
		        $mail->setFrom('njthummar0@gmail.com', "N.J.Thummar");
		        $mail->addAddress($email);

		        $mail->Subject = 'Zellanto - The Camera Store New Password';
		        $mail->Body    = 'http://localhost/zellanto/newpassword.php?email='.$_POST['email'].'';

		        $mail->send();

		    } 
		    catch (\PHPMailer\PHPMailer\Exception $e) 
		    {
		        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		 	}
			// send mail to admin
			$_SESSION['forgot_success'] = 1;
			header("location:index.php#category_section");
		}
		else
		{
			$_SESSION['forgot_fail'] = 1;
			header("location:forgot.php#category_section");
		}
}
?>
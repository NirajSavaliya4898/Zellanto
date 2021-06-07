<?php
session_start();
include("connection.php");
include 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$user=$_POST['username'];
$email=$_POST['email'];
$pass=md5($_POST['password']);
$cpass=md5($_POST['confirm-password']);

if(!(empty($user) && empty($email) && empty($pass)))
{
	if($pass != $cpass)
	{
		header("location:index.php?match=1");
		exit;
	}

	$qry="select * from user where user_name='".$user."'";
	$result=mysqli_query($con,$qry);

	if (mysqli_num_rows($result) != 0)
	{
		header("location:index.php?username=error");
		exit;
	}

	$qry="select * from user where email='".$email."'";
	$result=mysqli_query($con,$qry);

	if (mysqli_num_rows($result) == 0)
	{
		$qry="insert into user(user_name,email,password,is_admin)
		values('$user','$email','$pass',0)";
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
		        $mail->addAddress($email, $user);

		        $mail->Subject = 'Zellanto - The Camera Store Registration';
		        $mail->Body    = 'Thank you for Registration.Visit Our Website.... .. .!!';

		        $mail->send();

		    } catch (\PHPMailer\PHPMailer\Exception $e) {
		        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		    }
		// send mail to admin
			$_SESSION['register_success'] = 1;
			header("location:index.php#category_section");
		}
		else
		{
			header("location:index.php?email=error");
			exit;
		}
		 
	}	

}
else
{
	$_SESSION['register_fail'] = 1;
	header("location:index.php#category_section");
	exit;
}

?>
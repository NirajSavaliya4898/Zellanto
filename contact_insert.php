<?php
include("connection.php");
include 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$fname=$_POST['name'];
$lname=$_POST['surname'];
$email=$_POST['email'];
$msg=$_POST['message'];

$qry="insert into contactus(firstname,lastname,email,message)
		values('$fname','$lname','$email','$msg')";	

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
		        $mail->addAddress($email,$fname,$lname);

		        $mail->Subject = 'Zellanto - The Camera Store - Contact Us';
		        $mail->Body    = 'Thank you for Contact Us.Visit Our Website.... .. .!!';

		        $mail->send();

		    } 
		    catch (\PHPMailer\PHPMailer\Exception $e) 
		    {
		        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		 	}
		// send mail to admin
			$_SESSION['contact_success'] = 1;
			header("location:contact.php");
		}
		else
		{
			header("location:index.php?email=error");
			exit;
		}
?>


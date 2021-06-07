<?php
include 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$con=mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($con,"unica");
$name=$_GET["txtname"];
$email=$_GET['txtemail'];
$sub=$_GET["txtsub"];
$msg=$_GET["txtmsg"];
$qry="insert into contact(name,email,subject,message) 
		values('$name','$email','$sub','$msg')";
if(mysqli_query($con,$qry))
{

// create object of PHPMailer class with boolean parameter which sets/unsets exception.
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sweetiahya@gmail.com';
        $mail->Password = 'gmail Password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        //$mail->SMTPDebug = 3;
        $mail->setFrom('sweetiahya@gmail.com', "ahya sweeti");
        $mail->addAddress($email, $name);

        $mail->Subject = 'College Management System';
        $mail->Body    = 'Thanks for getting in touch,we will be contacting uh..';

        $mail->send();

    } catch (\PHPMailer\PHPMailer\Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
// send mail to admin
	header("location:contact.php");
}
else
{
	echo mysqli_error($con);
}

mysqli_close($con);
?>
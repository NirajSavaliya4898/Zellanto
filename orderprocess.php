<?php
include('connection.php');
include 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
session_start();
//print_r($_SESSION);
//$_SESSION['user_id']."<br>";

$date=date('Y-m-d');
$total=0;
foreach ($_SESSION['cart'] as $key => $value){
                            // $value['cart_catid'];
                            // $value['cart_prodid'];
                            // $value['cart_title'];
                            $qty=$qty+$value['cart_qty'];
                            // $value['cart_price'];
                            $total=$total+$value['cart_price'];	
                            
                           }

$total;
$sg=round($total*6/100);        
$cg=round($total*6/100);
$ftot=round($total+$sg+$cg);
//echo $ftot;
$qry="insert into ordermaster(cust_id,date,
								pay_mode,price,
								cgst,sgst,
								totalprice,totalqty) 
								values(".$_SESSION['user_id'].",
								'$date',
								'Debit card',
								$total,".$cg.",".$sg.",".$ftot.",'$qty')";

								if(mysqli_query($con,$qry) or die(mysqli_error($con)))
								{
									$orderid=mysqli_insert_id($con);
																		
									foreach ($_SESSION['cart'] as $key => $value){
			                            // $value['cart_catid'];
			                            // $value['cart_prodid'];
			                            // $value['cart_title'];
			                            // $value['cart_qty'];
			                            // $value['cart_price'];
			                            $total=$total+$value['cart_price'];	
                            			$qry1="insert into orderdetail(order_id,media_id,product_id,cat_id,qty,price)
                            			values(". $orderid.",".$value['cart_mediaid'].",".$value['cart_prodid'].",".$value['cart_catid'].",".$value['cart_qty'].",".$value['cart_total'].")";
                            			if(!mysqli_query($con,$qry1))
                            			{
                            				echo mysqli_error($con);	
                            			} 
                            		}
                            		if(mysqli_query($con,$qry))
									{
											//create object of PHPMailer class with boolean parameter which sets/unsets exception.
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
											        $mail->Body    = 'Your Place Order Now... .. .!!';

											        $mail->send();

											    } 
											    catch (\PHPMailer\PHPMailer\Exception $e) 
											    {
											        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
											 	}
											// send mail to admin
												header("location:payment.php");
											}
											else
											{
												header("location:order.php?email=error");
												exit;
											}
								}
?>
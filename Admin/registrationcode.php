<?php  
include("connection.php");

$user_name=$_POST['username'];
$email=$_POST['email']; 
$password=md5($_POST['pass']);

    $qry="insert into user(user_name,email,password,is_admin) VALUE ('$user_name','$email','$password',1)";
    if(mysqli_query($con,$qry))
    {
        header("location:login.php?success=1");
    }
    else
    {
        header("location:registration.php");
    } 
        
?>
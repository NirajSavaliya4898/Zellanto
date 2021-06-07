<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$con=mysqli_connect("localhost","root","") or die("Could not connect");
    mysqli_select_db($con,"zellanto") or die("Could not select db");
    if(empty($_SESSION['uname'])){
    header("location:login.php");
    }
?>
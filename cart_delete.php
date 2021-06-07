<?php
session_start();
include("connection.php");

$request_key = $_REQUEST['key'];


foreach ($_SESSION['cart'] as $key => $value) {
	if($key == $request_key){
		unset($_SESSION['cart'][$key]);
	}
}

header("location:cart.php");
exit;
?>
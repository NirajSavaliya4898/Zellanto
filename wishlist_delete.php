<?php
session_start();
include("connection.php");

$request_key = $_REQUEST['key'];


foreach ($_SESSION['wishlist'] as $key => $value) {
	if($key == $request_key){
		unset($_SESSION['wishlist'][$key]);
	}
}

header("location:wishlist.php");
exit;
?>
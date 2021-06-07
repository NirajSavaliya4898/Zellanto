<?php
session_start();
include("connection.php");

 if($_POST['action'] == 'update_cart' && isset($_POST['key'])){

 	$data = array();
 	$update_key = $_POST['key'];
 	$qty = $_POST['qty'];
 	$btn = $_POST
 	

 	foreach ($_SESSION['cart'] as $key => $value) {
 		
 		if($key == $update_key){

 			$_SESSION['cart'][$key]['cart_qty'] = $qty;
 			$_SESSION['cart'][$key]['cart_total'] = $_SESSION['cart'][$key]['cart_price'] * $qty; 
 		}	

 	}

 	$data['total_price'] = number_format($_SESSION['cart'][$key]['cart_price'] * $qty,2);
 	$data['total_qty'] = $qty;
 	$data['key'] = $key;
 	echo json_encode($data);
 	exit;

 }

?>
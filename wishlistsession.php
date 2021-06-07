<?php
session_start();
include("connection.php");

$product_id = $_REQUEST['product_id'];
$lense_id = $_REQUEST['lense_id'];
$Acc_id = $_REQUEST['Acc_id'];

if(!empty($product_id)){
	$sql = "SELECT * FROM camera c,media m,brand b 
			WHERE c.media_id=m.media_id 
			AND c.cam_id = '".$product_id."'
			AND c.brand_id = b.brand_id";	

	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);

	$product_id = $result['cam_id'];
	$product_name = $result['cam_name'];
	$price = $result['price'];
	$product_img =  $result['media_url'];
	$brand_name = $result['name'];
	$description = $result['description1'];
	$warranty = $result['warranty'];				
}

if(!empty($lense_id)){
	$sql = "SELECT *,l.description as description FROM lenses l,media m,brand b 
			WHERE l.media_id=m.media_id 
			AND l.lense_id = '".$lense_id."'
			AND l.brand_id = b.brand_id";

	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);

	$product_id = $result['lense_id'];
	$product_name = $result['lense_name'];
	$price = $result['price'];
	$product_img =  $result['media_url'];
	$brand_name = $result['name'];	
	$description = $result['description'];
	$warranty = $result['warranty'];		
}

if(!empty($Acc_id)){
	$sql = "SELECT * FROM accessories a,media m,brand b 
			WHERE a.media_id=m.media_id 
			AND a.Acc_id = '".$Acc_id."'
			AND a.brand_id = b.brand_id";

	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);

	$product_id = $result['Acc_id'];
	$product_name = $result['acc_name'];
	$price = $result['price'];
	$product_img =  $result['media_url'];
	$brand_name = $result['name'];
	$description = $result['description1'];
	$warranty = $result['warranty'];			
}

$cart_array['cart_img'] = $product_img;
$cart_array['cart_title'] = $product_name;
$cart_array['cart_price'] = $price;
$cart_array['cart_brand'] = $brand_name;
$cart_array['cart_desc'] = $description;
$cart_array['cart_warr'] = $warranty;

$_SESSION['wishlist'][] = $cart_array;

header("location:wishlist.php");
exit;
?>
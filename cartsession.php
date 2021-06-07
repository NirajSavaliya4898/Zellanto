<?php
session_start();
include("connection.php");

$product_id = $_REQUEST['product_id'];
$lense_id = $_REQUEST['lense_id'];
$Acc_id = $_REQUEST['Acc_id'];
$cid = $_REQUEST['catid'];

if(!empty($product_id)){
	$sql = "SELECT * FROM camera c,media m,brand b 
			WHERE c.media_id=m.media_id 
			AND c.cam_id = '".$product_id."'
			AND c.brand_id = b.brand_id";	

	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);
	$mediaid=$result['media_id'];
	$product_id = $result['cam_id'];
	$product_name = $result['cam_name'];
	$price = $result['price'];
	$product_img =  $result['media_url'];
	$brand_name = $result['name'];		
}

if(!empty($lense_id)){
	$sql = "SELECT * FROM lenses l,media m,brand b 
			WHERE l.media_id=m.media_id 
			AND l.lense_id = '".$lense_id."'
			AND l.brand_id = b.brand_id";

	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);

	$product_id = $result['lense_id'];
	$mediaid=$result['media_id'];
	$product_name = $result['lense_name'];
	$price = $result['price'];
	$product_img =  $result['media_url'];
	$brand_name = $result['name'];			
}

if(!empty($Acc_id)){
	$sql = "SELECT * FROM accessories a,media m,brand b 
			WHERE a.media_id=m.media_id 
			AND a.Acc_id = '".$Acc_id."'
			AND a.brand_id = b.brand_id";

	$query = mysqli_query($con,$sql);
	$result = mysqli_fetch_array($query);

	$product_id = $result['Acc_id'];
	$mediaid=$result['media_id'];
	$product_name = $result['acc_name'];
	$price = $result['price'];
	$product_img =  $result['media_url'];
	$brand_name = $result['name'];			
}

// $cart_array['cart_catid'] = $cid;
// $cart_array['cart_prodid'] = $product_id;
// $cart_array['cart_img'] = $product_img;
// $cart_array['cart_title'] = $product_name;
// $cart_array['cart_price'] = $price;
// $cart_array['cart_brand'] = $brand_name;
// $cart_array['cart_qty'] = 1;
// $cart_array['cart_total'] = $price * 1;
// $cart_array['cart_final_total'] = 0;


foreach ($_SESSION['cart'] as $key => $value) {
	if($value['cart_prodid']==$product_id and $value['cart_catid']==$cid)
	{
		$ind=$key;

		$found="exist";
	}
	
}

if($found=='exist')
	{
		// $cart_array[$ind]['cart_catid'] = $cid;
		// $cart_array[$ind]['cart_prodid'] = $product_id;
		// $cart_array[$ind]['cart_img'] = $product_img;
		// $cart_array[$ind]['cart_title'] = $product_name;
		// $cart_array[$ind]['cart_price'] = $price;
		// $cart_array[$ind]['cart_brand'] = $brand_name
		// $_SESSION['cart'][$ind]['cart_price']+=$_SESSION['cart'][$ind]['cart_price'];
		$_SESSION['cart'][$ind]['cart_total']+=$_SESSION['cart'][$ind]['cart_total'];
		$_SESSION['cart'][$ind]['cart_qty']+=1;
		//$cart_array['cart_final_total']+=$_SESSION['cart'][$ind]['cart_total'];
		// $_SESSION['cart'][] = $cart_array;
}
else
{
	$cart_array['cart_catid'] = $cid;
	$cart_array['cart_mediaid'] = $mediaid;
	$cart_array['cart_prodid'] = $product_id;
	$cart_array['cart_img'] = $product_img;
	$cart_array['cart_title'] = $product_name;
	$cart_array['cart_price'] = $price;
	$cart_array['cart_brand'] = $brand_name;
	$cart_array['cart_qty'] = 1;
	$cart_array['cart_total'] = $price * 1;
	$cart_array['cart_final_total'] = 0;
	$_SESSION['cart'][] = $cart_array;
}

if($_REQUEST['buy_now'] == 1){

	header("location:order.php");
	exit;	
}

if($_REQUEST['addcart'] == 1){
	header("location:index.php");
	exit;	
}

if($_REQUEST['add_cart'] == 1){
	header("location:camera.php");
	exit;	
}

if($_REQUEST['adcart'] == 1){
	header("location:Lenses.php");
	exit;	
}

if($_REQUEST['ad_cart'] == 1){
	header("location:accessories.php");
	exit;	
}

if($_REQUEST['ad'] == 1){
	header("location:viewcamera.php");
	exit;	
}

if($_REQUEST['add'] == 1){
	header("location:viewlense.php");
	exit;	
}

if($_REQUEST['addd'] == 1){
	header("location:viewaccessories.php");
	exit;	
}

header("location:cart.php");
exit;
?>
<?php
require('connection.php');

if(!isset($_SESSION['fashionstore']) && empty($_SESSION['fashionstore'])) {
     ob_start();
    header('Location:../login.php ');
    ob_end_flush();
    die();
}

$pid = $_GET['pid'];
$qty = $_GET['qty'];

if($qty=='' or $qty == 0){
    $qty = 1;
}

$query= "select * from product where product_id = $pid";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_array($run);
$pname = $data['name'];
$img = $data['image'];

$price = $data['price'];

$total = $price * $qty;



$userEmail=$_SESSION["fashionstore"];
$redirect = $_GET['redirect'];

$query= "insert into cart(product_id,user_email,name,price,qty,image,total) values('$pid','$userEmail','$pname','$price','$qty','$img','$total');";

if(mysqli_query($con,$query))
{
echo "<script> alert('Product added successfully!')</script>";
header("location: $redirect");
}

?>
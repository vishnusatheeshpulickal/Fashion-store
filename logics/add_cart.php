<?php
require('connection.php');

if(!isset($_SESSION['fashionstore']) && empty($_SESSION['fashionstore'])) {
     ob_start();
    header('Location:../login.php ');
    ob_end_flush();
    die();
}

$pid = $_GET['pid'];
$userEmail=$_SESSION["fashionstore"];
$redirect = $_GET['redirect'];

$query= "insert into cart(product_id,user_email) values('$pid','$userEmail');";

if(mysqli_query($con,$query))
{
echo "<script> alert('Product added successfully!')</script>";
header("location: $redirect");
}

?>
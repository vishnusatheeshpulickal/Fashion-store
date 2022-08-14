<?php
include('connection.php');
$p_id = $_GET['id'];

  $query = "delete from product where product_id=$p_id";
  if(mysqli_query($con,$query))
   {
    echo "<script> alert('Successfully deleted!')</script>";
    header("Location: ../admin/products.php",true);
    exit();
 }

?>
<?php
include('connection.php');
$pur_id = $_GET['id'];

  $query = "update purchase set status='Delivered' where pur_id=$pur_id";
  if(mysqli_query($con,$query))
   {
    echo "<script> alert('Successfully deleted!')</script>";
    header("Location: ../admin/orders.php",true);
    exit();
 }

?>
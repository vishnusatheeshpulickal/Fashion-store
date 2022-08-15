<?php
include('connection.php');
$pur_id = $_GET['id'];
$date = date('y-m-d');

  $query = "update purchase set status='Delivered',del_date='$date' where pur_id=$pur_id";

  echo $date;
  if(mysqli_query($con,$query))
   {
    echo "<script> alert('Successfully deleted!')</script>";
    header("Location: ../admin/orders.php",true);
    exit();
 }

?>
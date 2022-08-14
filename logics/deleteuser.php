<?php
include('connection.php');
$p_id = $_GET['id'];

  $query = "delete from users where user_id=$p_id";
  if(mysqli_query($con,$query))
   {
    echo "<script> alert('Successfully deleted!')</script>";
    header("Location: ../admin/users.php",true);
    exit();
 }

?>
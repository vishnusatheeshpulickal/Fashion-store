<?php

require('connection.php');

if(isset($_POST['checkout']))
{
  $name=$_POST['name'];
  $district=$_POST['district'];
  $phone=$_POST['phone'];
  $address = $_POST['address'];
  $pincode = $_POST['pincode'];

  $userEmail = $_SESSION["fashionstore"];

  $cartquery = "select * from cart where user_email = '$userEmail'";

  $run = mysqli_query($con,$cartquery);
  $data = mysqli_fetch_array($run);

  $pid = $data['product_id'];
  $total = $data['total'];

$query= "insert into purchase(name,address,phone,pin,district,user_email,product_id,tot_amt)values('$name','$address','$phone','$pincode','$district','$userEmail','$pid','$total');";

if(mysqli_query($con,$query))
{
    $del = "delete from cart where user_email = '$userEmail'";
    if(mysqli_query($con,$del))
     {
        echo "<script> alert('Order placed successfully!')</script>";
       header("location: ../orderplaced.php");
     }

 }
}

?>
<?php

include('connection.php');

// Register page
if(isset($_POST['rgt-btn']))
{
 $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];


if($name =='' or !(preg_match("/^([a-zA-Z ]+)$/",$name)))
{
echo "<script> alert('Please enter your name')</script>";
exit();
}

if($email =='' or !(preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$email)))
{
echo "<script> alert('Please enter your valid email')</script>";
exit();
}

if($phone =='' or strlen($phone)!=10)
{
echo "<script> alert('Please enter valid phone number')</script>";
exit();
}


if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}else{
  $password = password_hash($password, PASSWORD_BCRYPT);
}


$check_email="select * from users where email='$email'";

$run = mysqli_query($con,$check_email);

//print mysqli_num_rows($run);

if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
exit();
}
$query= "insert into users(name,email,password,phone) values ('$name','$email','$password','$phone')";


if(mysqli_query($con,$query))
{
echo "<script> alert('Succussfully registered')</script>"; 
header("location: ../login.php");
 }
}

?>
<?php

require('connection.php');

if(isset($_POST['user-add']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $upassword = $_POST['password'];

}

$password = password_hash($upassword, PASSWORD_BCRYPT);

$check_email="select * from users where email='$email'";

$run = mysqli_query($con,$check_email);


if(mysqli_num_rows($run)>0)
{
echo "<script> alert('Email already exists') </script>";
header("location: ../admin/adduser.php");
exit();
}

$query= "insert into users(name,email,password,phone)values('$name','$email','$password','$phone');";

if(mysqli_query($con,$query))
{
echo "<script> alert('User added successfully!')</script>";
header("location: ../admin/adduser.php");
}


?>
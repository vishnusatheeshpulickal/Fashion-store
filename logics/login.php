<?php
include('connection.php');
if(isset($_POST['log-btn']))
{
  $email=$_POST['email'];
 $password=$_POST['password'];

if($email =='')
{
echo "<script> alert('Please enter your email ')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

$query="select * from users where email='$email'"; 
$run=mysqli_query($con,$query);

   if(mysqli_num_rows($run)>0)
   {
     $result = mysqli_fetch_array($run);
     $pwd = $result["password"];
        if(password_verify($password,$pwd)){
            setcookie("fashionstore",$result['name'],time()+16024000,"/");
           
            $_SESSION['fashionstore']=$email;
	          echo "<script> alert('Login Successful')</script>";
           	header("location: ../index.php");
        }else{
          echo "<script> alert('Invalid Login')</script>";
        }
   }
   else
   {
    echo "<script> alert('Invalid Login')</script>";
   }
}

?>
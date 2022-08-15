<?php
include('connection.php');
if(isset($_POST['log-btn']))
{
  $username=$_POST['username'];
 $password=$_POST['password'];

if($username =='')
{
echo "<script> alert('Please enter your username ')</script>";
exit();
}

if($password =='')
{
echo "<script> alert('Please enter your password')</script>";
exit();
}

$query="select * from admin where username='$username'"; 
$run=mysqli_query($con,$query);

   if(mysqli_num_rows($run)>0)
   {
     $result = mysqli_fetch_array($run);
     $pwd = $result["password"];
        if($pwd == $password){
            setcookie("fashionstore-admin",$result['username'],time()+16024000,"/");
           
            $_SESSION['fashionstore-admin']=$username;
	          echo "<script> alert('Login Successful')</script>";
           	header("location: ../admin/index.php");
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
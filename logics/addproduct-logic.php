<?php

require('connection.php');

if(isset($_POST['pro-add']))
{
  $name=$_POST['name'];
  $description=$_POST['description'];
  $short_des=$_POST['short_des'];
  $old_price=$_POST['old_price'];
  $price=$_POST['price'];
//   $image=$_POST['image'];
//   $desc_img=$_POST['desc-img'];

//   Upload main image
  $image = rand() . $_FILES['image']['name'];
  move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/" . $image);
 
//  Upload description image
  $desc_img = rand() . $_FILES['desc-img']['name'];
  move_uploaded_file($_FILES['desc-img']['tmp_name'],"../uploads/" . $desc_img);

$query= "insert into product(name,description,short_des,old_price,price,image,desc_image) values('$name','$description','$short_des','$old_price','$price','$image','$desc_img');";

if(mysqli_query($con,$query))
{
echo "<script> alert('Product added successfully!')</script>";
header("location: ../admin/addproduct.php");
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<?php 
      include('./logics/connection.php');

      if(isset($_SESSION['fashionstore']) && empty($_SESSION['fashionstore'])) {
     ob_start();
    header('Location:./login.php ');
    ob_end_flush();
    die();
  }else{
    $userEmail=$_SESSION["fashionstore"];
  }

      $query="select * from cart where user_email='$userEmail'";
      $run = mysqli_query($con,$query);
      $num_rows = mysqli_num_rows($run);

      $datas = array();
      while($row = mysqli_fetch_assoc($run)){
      $datas[] = $row;
     }    
      ?>

</head>
<body>

    <?php require('header.php')?>

<div class="container" style="margin-top:15px;">
  <h1 style="font-size:30px!important;">Checkout</h1>
  
  <form action="./logics/checkout-logic.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="sh-desc">Phone</label>
      <input type="text" class="form-control" name="phone" id="sh-desc" placeholder="Phone">
    </div>
  </div>
  <div class="form-group">
    <label for="desc">Address</label>
    <input type="text" class="form-control" name="address" id="desc" placeholder="Address">
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="a-price">District</label>
      <input type="text" class="form-control" name="district" id="a-price" placeholder="District">
    </div>
    <div class="form-group col-md-6">
      <label for="sh-desc">pincode</label>
      <input type="text" class="form-control" name="pincode" id="sh-desc" placeholder="Pincode">
    </div>
  </div>

  <div class="pr-btn">
     <input type="submit" name="checkout" class="prcd-btn" value="Check Out"/>
  </div>
  <!-- <button type="submit" name="check-out" class="btn btn-primary">Place order</button> -->
</form>


</div>

</body>

<style>
.cart-row{padding:15px 0}
.cart-row:nth-child(even){background:#efefef}
.product-name{font-size:16px;font-weight:600}
.product-options{font-size:12px;margin-bottom:5px}
.product-options span{color:#666;font-weight:400;text-transform:uppercase}
.product-articlenr{color:#666;font-weight:400;text-transform:uppercase}
.product-price small{color:#666;font-weight:300;font-size:20px;margin:0;padding:0;line-height:initial}
.cart-table .cart-row input{width:30px;height:auto;padding:2px;border-radius:0;border-color:#000;float:left;font-size:14px;text-align:center}
.cart-table .cart-row button.update{border:0;padding:7px 8px;background:#000;color:#fff;font-size:9px;float:left;margin-right:5px}
.cart-table .cart-row button.delete{background-color:#FFB2B2;color:#000!important;padding:7px 13px;font-size:13px;border:0;border-radius:50px;cursor:pointer;}
.product-price-total{font-size:16px;font-weight:400;width:80%;float:left}
.cart-actions{display:flex;justify-content:center;align-items:center}
.cart-special-holder{background:#efefef}
.cart-special{padding:1em 1em 0;display:block;margin-top:.5em;border-top:1px solid #dadada}
.cart-special .cart-special-content:before{content:"\21b3";font-size:1.5em;margin-right:1em;color:#6f6f6f;font-family:helvetica,arial,sans-serif}
.pr-btn{
    display:flex;
    justify-content: space-evenly;
}
.prcd-btn{
    padding: 1em 2.1em 1.1em;
    border-radius: 50em;
    border:none;
    margin: 8px 8px 8px 8px;
    color: white;
    background-color: #fe4c50;
    display: inline-block;
    -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
    font-family: sans-serif;
    font-weight: 800;
    font-size: .85em;
    text-transform: uppercase;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
}
.prcd-btn:hover{
    background-color: #d55050;
}
</style>
</html>
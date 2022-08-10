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
</head>
<body>

    <?php require('header.php')?>

<div class="container" style="margin-top:10px;">
  <h1 style="font-size:30px!important;">Cart</h1>
<div class="cart-table">
  
 <div class="row cart-row">
   <div class="col-xs-12 col-md-2">
    <img src="https://profilewear.se/image/catalog/shop_information/kategori/pw3/T-shirt.png" width="100%">
  </div>
  <div class="col-md-6">
    <div class="product-articlenr">#643489</div>
    <div class="product-name">Basic T-shirt</div>
    <div class="product-options"><span>Color:</span> Grey<br><span>Size:</span> M</div>
    <div class="product-price">
        <!-- <input type="text" name="quantity[4]" value="1" size="1" class="form-control">
        <button type="submit" data-toggle="tooltip" title="Uppdatera" class="update"><i class="fas fa-sync"></i></button> -->
        <div class="product-price"><span>1 </span><small>x</small> 49 SEK</div>
    </div>
   </div>
  <div class="col-md-3 cart-actions">
    <div class="product-price-total">49 SEK</div>
    <div class="product-delete">
      <button type="button" data-toggle="tooltip" title="Ta bort" class="delete" onclick="cart.remove('5');"><i class="fas fa-times-circle"></i></button>
      </div>
  </div>
</div><!-- cart-row-->
 

  
</div>
  
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
.cart-table .cart-row button.delete{background-color:#FFB2B2;color:#000!important;padding:7px 13px;font-size:13px;border:0;border-radius:50px}
.product-price-total{font-size:16px;font-weight:400;width:80%;float:left}
.cart-actions{display:flex;justify-content:center;align-items:center}
.cart-special-holder{background:#efefef}
.cart-special{padding:1em 1em 0;display:block;margin-top:.5em;border-top:1px solid #dadada}
.cart-special .cart-special-content:before{content:"\21b3";font-size:1.5em;margin-right:1em;color:#6f6f6f;font-family:helvetica,arial,sans-serif}
</style>
</html>
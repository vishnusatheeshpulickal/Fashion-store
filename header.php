<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
      if(isset($_SESSION['fashionstore']) && !empty($_SESSION['fashionstore'])) {
		$email = !empty($_SESSION['fashionstore']) ? $_SESSION['fashionstore'] : '';
    $query="select * from cart where user_email='$email'";
    $run=mysqli_query($con,$query);
	$count = mysqli_num_rows($run);
  }else{
	$count = 0 ; 
  }
	?>

</head>
<div class="top_nav"> 
         <div class="container">
				   <div class="row">
					<div class="col-md-6">
						<div class="top_nav_left"></div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
                                    <?php
                                       if((!isset($_COOKIE['fashionstore'])) or (empty($_COOKIE['fashionstore']))){
                                        echo('<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In/Register</a></li>');
                                       }else{
                                        echo('<li><a href=""><i class="fa fa-user" aria-hidden="true"></i>'.$_COOKIE['fashionstore'].'</a></li>
                                        <li><a href="./logics/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>');
                                       }
                                    ?>
									</ul>
								</li>
							</ul>
						</div>
					</div>
			</div>
		</div>
	</div>
			<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="index.php">Fashion<span>store</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="mens.php">Men</a></li>
								<li><a href="womens.php">Women</a></li>
								<li><a href="contact.php">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#">
										<i class="fa fa-bell" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">0</span>
									</a></li>
								<li class="checkout">
									<a href="cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items"><?php echo $count ?></span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

			<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">shop</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
			</ul>
		</div>
	</div>


    </html>
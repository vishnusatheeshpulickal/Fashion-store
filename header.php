<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    </html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

<div class="super_container">

<?php require('header.php');?>

	<div class="container contact_container" style="margin-top:20px;">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Contact Us</h1>
					<p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
					<div>
						<p>+91 9876543210</p>
						<p>vishnusatheeshpulickalprojects@gmail.com</p>
					</div>
					<div>
						<p></p>
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Mon-Fri</p>
						<p>Sunday: Closed</p>
					</div>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Follow Us</h1>
					<ul class="social d-flex flex-row">
						<li><a href="https://github.com/vishnusatheeshpulickal"><i class="fa-brands fa-github"></i></a></li>
							<li><a href="https://www.instagram.com/vishnu_satheesh_pulickal/"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="https://www.linkedin.com/in/vishnu-satheesh/"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Get In Touch With Us!</h1>
					<p>Fill out the form below to recieve a free and confidential.</p>
					<form action="post" action="">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
							<input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required.">
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">send message</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>


	<?php require('footer.php');?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADE || contactez-nous</title>
	


<?php include("cs.php"); ?>
</head>
<body>
<div class="fh5co-loader"></div>
        <div id="page">
<?php include("nav.php"); ?>

<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">ensa oujda<br>  BP 669, Oujda 60000</li>
							<li class="phone"><a href="tel://1234567920">05365-05470</a></li>
							<li class="email" ><a href="mailto:ade.ensao@gmail.com" style="color : blue;">ade.ensao@gmail.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form method="POST" action="contact-us.php">
						<div class="row form-group">
							<div class="col-md-6">
								<!-- <label for="fname">First Name</label> -->
								<input type="text" name="prenom" class="form-control" placeholder="prenom">
							</div>
							<div class="col-md-6">
								<!-- <label for="lname">Last Name</label> -->
								<input type="text" name="nom" class="form-control" placeholder="nom">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="email">Email</label> -->
								<input type="text" name="email" class="form-control" placeholder="addresse mail">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="subject">Subject</label> -->
								<input type="text" name="subject" class="form-control" placeholder="objet">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<!-- <label for="message">Message</label> -->
								<textarea name="message" name="message" cols="30" rows="10" class="form-control" placeholder="text"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" name="enregistrer" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13128.681000846935!2d-1.8963396!3d34.6504031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23a99f5d4e9a3161!2s%C3%89cole%20Nationale%20des%20Sciences%20Appliqu%C3%A9es!5e0!3m2!1sfr!2sma!4v1617221282506!5m2!1sfr!2sma" width=100% height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<?php include("footer.php"); ?>
</div>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
</body>
</html>
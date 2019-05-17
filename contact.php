<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact Us</title>
		<link href="style.css" rel="stylesheet"/>
	</head>

	<body>
		<header>	
		<img src="img/logo.png" alt="CD inc. logo" class="logo">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php#our_products">Products</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>
		
		<section class="welcome parallax">
		<div class="wrapper">
		<div class="contact-us">
		<div class="contact-title">Contact Us</div>
		<form class="contact-form" action="contactform.php" method="post">
				<input type="text" name="name" placeholder="Full name">
				<input type="text" name="mail" placeholder="Your e-mail">
				<input type="text" name="subject" placeholder="Subject">
				<textarea name="message" rows="7" placeholder="Message"></textarea>
				<button type="submit" name="submit">SEND</button>
		</form>
		</div>
		</div>
		</section>
		
		<div class="navigation" id="map"></div>
		
		<footer>
		
		<div class="container">
		<div class="col left">
			<ul class="unstyled">
				<li><strong>Address</strong></li>
				<li>The Crystal Mall</li>
				<li>4500 Kingsway,</li>
				<li>Burnaby, BC V5H 2A9</li>
			</ul>
		</div>
		
		<div class="col middle">
			<ul class="unstyled">
				<li><strong>Hours</strong></li>
				<li>11:00AM to 6:30PM</li>
				<li>7 Days a Week</li>
			</ul>
		</div>
		
		<div class="col right">
			<ul class="unstyled">
				<li><strong>Telephone</strong></li>
				<li>+1 604 439-9497</li>
				<li>+1 778 896-0923</li>
				<li><strong>Email</strong></li>
				<li>kirbyzhang@hotmail.com</li>
			</ul>
		</div>
		</div>

		<p class="copyright">Copyright 漏 All Rights Reserved.</p>
		
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="parallax.js"></script>
		<script src="map.js"></script>
		<script async defer 
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1kMtAOTSVS__u4iFTK_HFCIeYqc_GsHM&callback=initMap">
		</script>
	</body>
</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome</title>

	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
		rel="stylesheet" />
	<link href="css/common.css" rel="stylesheet" />
	<link href="css/index.css" rel="stylesheet" />
	<link href="css/home.css" rel="stylesheet" />
</head>

<body>
	<div class="header sticky-top">
		<nav class="navbar navbar-expand-md navbar-light">
			<a class="navbar-brand" href="home.php">
				<img src="img/slogo1.jpg" />Paying Guest Accomondation
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="my-navbar">
				<ul class="navbar-nav">
					<a class="nav-link" href="home.php">
						<button>HOME</button>
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					if (!isset($_SESSION['user_id'])) {
						?>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
								<button>Signup</button>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
								<button>Login</button>
							</a>
						</li>

						<?php
					} else {
						?>
						<li class="nav-item">
							<a class="nav-link" href="dashboard.php">
								<button>My Profile</button>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="logout.php">
								<button>Logout</button>
							</a>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</nav>
	</div>
	<div id="loading"></div>
	<div class="landing-image">
		<h2 class="white text-center">
			Paying Guest Accommondation</h2>
		<h3> Home like Stay Always… </h3>
	</div>
	<div class="page-container">
		<h1 class="text-center">
			About Us
		</h1>

		<div class="row">
			<div class="col-md-12">
				<div class="about-us">
					<div class="about-us-header">
						<br>
						<p align="justify">
							Paying Guest Accommodation is a small business that is dedicated to the creation of a
							community of people who
							are passionate about the life of their children. We are a family of families, and we are a
							community of families.Imagine a stay that spells world class quality, is located in an urban
							hub where all your lifestyle needs are onl minutes away and yet a stay that is situated in
							sensible nature.Nature that's clean and breathes life in you loves you, caresses you to make
							you believe
							that you reside in a world of happiness.
							<b>A Paying Guest Accommodation,</b>
							that is immensely affordable and stuff of pleasure.

						</p>
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<section id="sec-pgo-amenities" class="p-50">
					<div class="container">
						<h3 style="color:black" class="d-flex justify-content-center">Our Amenities</h3>
						<br>
						<div class="row">
							<div class="col-md-3">
								<ul>
									<li>
										<h6>High Speed Internet</h6>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>Free WiFi</h6>

									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>24x7 Security</h6>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul class=>
									<li>
										<h6>Regular Cleaning</h6>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>

										<h6>24x7 Power Backup</h6>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>2-Wheeler Parking</h6>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>Fully Furnished</h6>

									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>Air Conditioner</h6>

									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>Hot & Cold Water</h6>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>Flat TV</h6>

									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										<h6>Locker</h6>
									</li>
								</ul>
							</div>
							<br>
							<br>
							<br>
						</div>
						<div lass="get-started-btn d-flex justify-content-center">
							<a href="room.php?city=nanded">
								<div class="get-started-btn d-flex justify-content-center">
									<button class="btn btn-block btn-primary" > Book your PG</button>
								</div>
							</a>
						</div>
						<br>
					</div>

				</section>
			</div>
		</div>
	</div>
	</div>
	<footer class="footer">
		<div class="footer-left">
			<p class="footer-links">
				<a href="home.php">Home</a>
				<a href="#">About</a>
				<a href="#">FAQ</a>
				<a href="#">Contact</a>
			</p>
			<p class="copyright"><a href="home.php">Paying Guest <br>
					Accommondation</a>
		</div>
		<div class="footer-center">
			<div>
				<h5> Contact Us </h5>
				<h6>MGM's College of engineering
					<br>Nanded, Maharashtra
				</h6>
				<div>
					<h6 class="text">+91 9067137698</h6>
					<h6 class="text"> pgaccomdation575@gmail.com</h6>
				</div>
			</div>
		</div>
		<div class="footer-right">
			<h6> Follow Us <br>
				<br>
				<div class="follow">
					<a href="https://www.facebook.com/profile.php?id=100069486420925" class="fb">
						Facebook<br>
					</a>
					<a href="https://twitter.com/home" class="twitter">
						Twitter<br>
					</a>
					<a href="https://www.linkedin.com/" class="linkedin">
						LinkedIn<br>
					</a>
					<a href="http://www.youtube.com/" class="youtube">
						Youtube<br>
					</a>
			</h6>
		</div>
	</footer>
</body>

</html>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Reservoir High School</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<!-- Style CSS -->		
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />

		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">
						
				<!-- Logo -->
					<h1><a href="index.php" id="logo"><img src="images/logo (2).png" width="300px" /></a></h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="news.php">News</a></li>
							<li><a href="login.php">Login</a></li>
							<li class="current"><a href="register.php">Register</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>

			</div>

		<!-- Highlights -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row 200%">
						<section class="6u 12u(2)">
							<h3>Register to The Library</h3>

							<?php
								if(isset($_GET['notify']))
								{
								echo "<div class='success'>".$_GET['notify']."</div>";
								//header('refresh:10;url=login.php');
								}
							?>

							<form action="registerpro.php" method="post">
								<div class="row 50%">
									<div class="12u">
									    <input type="email" name="email" id="email" placeholder="Email" />
									</div>
								</div>
								<div class="row 50%">
									<div class="6u 12u(3)">
										<input type="text" name="username" id="name" placeholder="Username" />
									</div>
									<div class="6u 12u(3)">
										<input type="Password" name="password" id="Password" placeholder="Password" />
									</div>
								</div>
								<div class="row 50%">
									<div class="6u 12u(3)">
										<select class="required" name="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="6u 12u(3)">
										<input type="text" name="contact" id="Password" placeholder="Contact no" />
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="button alt" value="Register" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</div>
			</section>


		<!-- Footer -->
			<div id="footer">

				<!-- Icons -->
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

				<!-- Copyright -->
					<div class="copyright">
						<ul class="menu">
							<li>&copy; Reservoir High school Library. All rights reserved</li><li>Designed By: <a href="">Glyph</a></li>
						</ul>
					</div>

			</div>

	</body>
</html>
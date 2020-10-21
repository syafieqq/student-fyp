<?php
session_start();

if (!isset($_SESSION['username'])) {
	header("location: homestaff.php");
}

?><section class="fnavbar">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Eja</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- <meta http-equiv="refresh" content="1"> -->







		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">





	</head>

	<body>





		<style>



		</style>
		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper">
					<img src="images/uc.jpg" alt="" width="314" height="64" />

					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">

						<li><a href="homestaff.php"><span class="hvr-grow"></span>
								<div><img src="house.svg" alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px">



						<li><a href="aboutusstaff.php" class="hvr-grow">About us</a></li>






						<li><a href="profilestaff.php" class="hvr-grow"><span></span> Welcome <?php echo $_SESSION['username']; ?> </a></li>
						<li><a href="admin-map.php" class="hvr-grow">Confirm Order</a></li>

						<li><a href="staffview.php" class="hvr-grow">View Order</a></li>



						<li><a href="viewcomment.php"><span class="hvr-grow"></span>
								<div><img src="call-center.svg" alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px">
						<li><a href="indexx.php"><span class="hvr-grow"></span>
								<div><img src="exit.svg" alt="https://www.flaticon.com/authors/freepik" width="30px" height="30px">

							</a></li>



						<style>
							.nav-wrapper {
								background-color: gold;
							}

							.hvr-grow {
								color: #010101;
							}
						</style>


					</ul>
				</div>
			</nav>
		</div>

</section>
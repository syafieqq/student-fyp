<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Eja</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">


</head>

<body>




	<?php
	session_start();
	$username = $_SESSION["login_user2"];
	if (!isset($_SESSION['username']))

	?><section class="fnavbar">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>



		</style>

		<div class="navbar-fixed">
			<nav>
				<div class="nav-wrapper">
					<img src="images/uc.jpg" alt="" width="314" height="64" />

					<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">





						<li><a href="homeadmin.php" class="hvr-grow">Home</a></li>


						<li><a href="view.php" class="hvr-grow">View Product</a></li>


						<li><a href="insert.php" class="hvr-grow">Add Product</a></li>
						<li><a href="viewtypepromotion.php" class="hvr-grow">View Type of Promotion</a></li>
						<li><a href="viewpromotion.php" class="hvr-grow">View Promotion</a></li>
						<li><a href="addpromo.php" class="hvr-grow">Add Promotion</a></li>




						<li><a href="adminview.php" class="hvr-grow">View User</a></li>



						<li><a href="userAccount.php?logoutSubmit=1" class="hvr-grow">Logout</a></li>
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
	<br>

	<?php
$db = mysqli_connect("us-cdbr-east-02.cleardb.com", "b6493e740390c8", "4e6ff6a6", "heroku_50e9ff92ea1da4e");

$msg = "";
if (isset($_POST['upload'])) {
	$image = $_FILES['image']['name'];

	$description = mysqli_real_escape_string($db, $_POST['description']);
	$code = mysqli_real_escape_string($db, $_POST['code']);
	$target = "" . basename($image);
	$price = mysqli_real_escape_string($db, $_POST['price']);
	$name = mysqli_real_escape_string($db, $_POST['name']);



	$sql = "INSERT INTO products (image, description,code,price,name) VALUES ('$image', '$description','$code','$price','$name')";

	if (!mysqli_query($db, $sql)) {
		die('Error: ' . mysqli_error($db));
	} else {

		echo '<script language="javascript">';
		echo 'alert("Successfully Insert the Data"); ';
		echo '</script>';
	}
}
$result = mysqli_query($db, "SELECT * FROM products");
	?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="UTF-8">
		<title>The Perfect Food at Your Door!</title>





		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">



		<title>Image Upload</title>
		<style type="text/css">
			body {
				background-image: url("Inkedba_LI.jpg");
				background-repeat: no-repeat;

				background-size: 1700px 870px;
			}

			#content {
				width: 50%;
				margin: 20px auto;
				border: 1px solid #cbcbcb;
			}

			form {
				width: 50%;
				margin: 20px auto;
			}

			form div {
				margin-top: 5px;
			}

			#img_div {
				width: 80%;
				padding: 5px;
				margin: 15px auto;
				border: 1px solid #cbcbcb;
				background: #767272;
				color: white;
			}

			#img_div:after {
				content: "";
				display: block;
				clear: both;


			}
		</style>
	</head>

	<body>

		<div id="content">

			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000">
				<div>
					<input type="file" name="image">

				</div>
				<div>
					<textarea id="text" cols="40" rows="4" name="description" placeholder="What's In Your Mind?"></textarea>
				</div>
				<div>
					<label for="code">Code</label>
					<input type="text" name="code" placeholder="code" required value="" />
					<span>
				</div>
				<div>
					<label for="price">Price</label>
					<input type="text" name="price" placeholder="price" required value="" />
					<span>
				</div>
				<div>
					<label for="name">Product Name</label>
					<input type="text" name="name" placeholder="name" required value="" />
					<span>
				</div>





				<div>
					<button class="btn btn-primary" type="submit" name="upload">Upload</button>

				</div>
			</form>
		</div>


	</body>

	</html>
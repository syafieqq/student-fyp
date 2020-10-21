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


	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	$city = mysqli_real_escape_string($db, $_POST['city']);
	$state = mysqli_real_escape_string($db, $_POST['state']);



	$sql = "INSERT INTO users (username,password,firstname,address,mobile,city,state) VALUES ('$username', '$password','$firstname','$address','$mobile','$city','$state')";

	if (!mysqli_query($db, $sql)) {
		die('Error: ' . mysqli_error($db));
	} else {

		echo '<script language="javascript">';
		echo 'alert("Successfully Insert the Data"); ';
		echo '</script>';
	}
}
$result = mysqli_query($db, "SELECT * FROM admin");
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

		<form method="POST" action="su.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">


			<div>
				<label for="username">Username</label>
				<input type="email" name="username" placeholder="username" required value="" />
				<span>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" placeholder="password" required value="" />
				<span>
			</div>
			<div>
				<label for="firstname">First Name</label>
				<input type="text" name="firstname" placeholder="firstname" required value="" />
				<span>
			</div>

			<div>
				<label for="address">Address</label>
				<input type="text" name="address" placeholder="address" required value="" />
				<span>
			</div>

			<div>
				<label for="mobile">Mobile</label>
				<input type="number" name="mobile" placeholder="mobile" required value="" />
				<span>
			</div>

			<div>
				<label for="city">City</label>
				<input type="text" name="city" placeholder="city" required value="" />
				<span>
			</div>

			<div>
				<label for="state">State</label>
				<input type="text" name="state" placeholder="state" required value="" />
				<span>
			</div>





			<div>
				<button class="btn btn-primary" type="submit" name="upload">Sign Up</button>
				<a class="btn btn-primary" href="indexlogin.php">Login</a>

			</div>
		</form>
	</div>


</body>

</html>
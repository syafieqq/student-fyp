<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Uncle Jack</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">

	<?php require('chunks/navbarn.php'); ?>
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
$db = mysqli_connect("localhost", "stagingmode", "abcd1234", "eja");

$msg = "";
if (isset($_POST['upload'])) {


	$jpro_name = mysqli_real_escape_string($db, $_POST['jpro_name']);
	$jpro_flag = mysqli_real_escape_string($db, $_POST['jpro_flag']);
	$jpro_amaun = mysqli_real_escape_string($db, $_POST['jpro_amaun']);





	$sql = "INSERT INTO jns_promosi (jpro_name,jpro_flag,jpro_amaun) VALUES ('$jpro_name','$jpro_flag','$jpro_amaun')";

	if (!mysqli_query($db, $sql)) {
		die('Error: ' . mysqli_error($db));
	} else {

		echo '<script language="javascript">';
		echo 'alert("Successfully Insert the Data"); ';
		echo '</script>';
	}
}
$result = mysqli_query($db, "SELECT * FROM jns_promosi");
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

		<form method="POST" action="addpromo.php" enctype="multipart/form-data">
			<input type="hidden" name="size" value="1000000">


			<div>
				<label for="jpro_name">Name of Promotion</label>
				<input type="text" name="jpro_name" placeholder="jpro_name" required value="" />
				<span>
			</div>
			<div>
				<label for="jpro_flag">Flag of Promotion</label>
				<input type="number" name="jpro_flag" placeholder="jpro_flag" required value="" />
				<span>
			</div>
			<div>
				<label for="jpro_amaun">Amount Needed to Get Promotion</label>
				<input type="text" name="jpro_amaun" placeholder="jpro_amaun" required value="" />
				<span>
			</div>









			<div>
				<button class="btn btn-primary" type="submit" name="upload">Add Promotion</button>


			</div>
		</form>
	</div>


</body>

</html>
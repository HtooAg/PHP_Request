<?php
session_start();

if (!isset($_SESSION['user'])) {
	$errorMessage = "You Need to Log in First!";
	header('location: home.php?error=' . $errorMessage);
	exit();
}

$name = $_SESSION['user']['name'];
$email = $_SESSION['user']['email'];
$phone = $_SESSION['user']['phone'];
$address = $_SESSION['user']['address'];
$general = $_SESSION['user']['general'];
$gender = $_SESSION['user']['gender'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<style>
		.wrap {
			width: 100%;
			max-width: 600px;
			margin: 40px auto;
		}

		.icon i {
			font-size: 50px;
		}
	</style>
</head>

<body>
	<div class="container wrap mt-5">
		<?php if (!isset($_GET["incorrect"])) : ?>
			<div class="alert alert-success alert-dismissible fade show text-center" id="alertBox" role="alert">
				<strong>You are now logged in successfully!</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		<?php endif ?>
		<div class="icon text-center">
			<i class="bi bi-person-circle h1"></i>
		</div>
		<h2 class="my-3 text-center"><?php echo $name . " " . "($general)" ?> </h2>
		<ul class="list-group">
			<li class="list-group-item">
				<b>Email: </b> <?php echo $email ?>
			</li>
			<li class="list-group-item">
				<b>Phone: </b> <?php echo $phone ?>
			</li>
			<li class="list-group-item">
				<b>Address: </b> <?php echo $address ?>
			</li>
			<li class="list-group-item">
				<b>General: </b> <?php echo $general ?>
			</li>
			<li class="list-group-item">
				<b>Gender: </b> <?php echo $gender ?>
			</li>
		</ul>
		<!-- </br> -->
		<div class="text-center mt-3">
			<a href="./_actions/logout.php">Logout</a>
		</div>
	</div>
</body>

</html>
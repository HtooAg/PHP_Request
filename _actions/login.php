<?php
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$phone = $_POST["phone"];
$address = $_POST["address"];
$general = $_POST["general"];
$gender = $_POST["gender"];

function validateUser($name, $email, $password, $phone, $address, $general, $gender)
{
	return (!empty($name) && !empty($email) && !empty($password) && !empty($phone) && !empty($address) && !empty($general) && !empty($gender));
}

if (validateUser($name, $email, $password, $phone, $address, $general, $gender)) {
	$_SESSION["user"] = [
		"name" => $name,
		"email" => $email,
		"password" => $password,
		"phone" => $phone,
		"address" => $address,
		"general" => $general,
		"gender" => $gender,
	];
	header('location: ../profile.php?correct=1');
	exit();
} else {
	$errorMessage = "You need to fill out all the required fields!";
	header('location: ./home.php?error=' . $errorMessage);
}

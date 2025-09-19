<?php
session_start();

// Get values using GET
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$password = $_GET['password'];

// Save in SESSION
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

// Save in COOKIES (valid for 1 hour)
setcookie("firstname", $firstname, time() + 3600, "/");
setcookie("lastname", $lastname, time() + 3600, "/");
setcookie("email", $email, time() + 3600, "/");

// Redirect to display page
header("Location: display_get.php");
exit();
?>

<?php
session_start();

// Get form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Store in SESSION
$_SESSION['firstname'] = $firstname;
$_SESSION['lastname'] = $lastname;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

// Store in COOKIES (valid 1 hour)
setcookie("firstname", $firstname, time() + 3600, "/");
setcookie("lastname", $lastname, time() + 3600, "/");
setcookie("email", $email, time() + 3600, "/");

// Redirect to display page
header("Location: display.php");
exit();
?>

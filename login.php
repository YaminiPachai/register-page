<?php
$name = $_POST['name'];
$password = $_POST['password'];

// Process the form data here

$response = "Hello, $name! Thank you for submitting your email address ($password).";

echo $response;
?>
<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

// Get the form data
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat-password'];




// Hash the password
$hash = password_hash($password, PASSWORD_DEFAULT);

// Insert the user into the database
$sql = "INSERT INTO users (username, email, number, password, level, created) VALUES (?, ?, ?, ?, 1, NOW())";
$stmt = $db->prepare($sql);
$stmt->execute([$username, $email, $number, $hash]);

// Redirect the user to the login page
header('Location: ../users.php');

?>

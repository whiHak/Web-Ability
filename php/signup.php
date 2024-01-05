<?php

$fullName = $_POST["full-name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$phoneNumber = $_POST["phone-number"];
$disability = $_POST["disability"]; // Fix the typo in the variable name

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$errors = array();


$conn = new mysqli('localhost', 'root', '', 'webability');
if ($conn->connect_error) {
    die('Connection Fail: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration (fullName, email, password, gender, phoneNumber, disability) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fullName, $email, $passwordHash, $gender, $phoneNumber, $disability); // Remove $confirmPassword from bind_param
    $stmt->execute();
     // Fix the typo in the echo statement
     $stmt->close();
     $conn->close();
     include("../pages/Signin.php");
    }
?>
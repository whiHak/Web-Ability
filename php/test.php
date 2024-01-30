<?php

$fullName = $_POST["full-name"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$phoneNumber = $_POST["phone-number"];
$disability = $_POST["disability"]; // Fix the typo in the variable name
$imageData = addslashes( file_get_contents($_FILES['profile']['tmp_name'])); 

$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$errors = array();

$conn = mysqli_connect('localhost', 'root', '', 'webability');
echo $imageData;

// if (!$conn) {
//     die('Connection Fail: ' . mysqli_connect_error());
// } else {
//     $stmt = mysqli_prepare($conn, "INSERT INTO registration (fullName, email, password, gender, phoneNumber, disability, imageData) VALUES (?, ?, ?, ?, ?, ?, ?)");

//     if ($stmt) {
//         mysqli_stmt_bind_param($stmt, "sssssss", $fullName, $email, $passwordHash, $gender, $phoneNumber, $disability, $imageData);
//         mysqli_stmt_execute($stmt);
//         mysqli_stmt_close($stmt);
//         mysqli_close($conn);

//         header('Location: ../pages/Signin.php');
//         exit();
//     } else {
//         die('Prepare statement failed: ' . mysqli_error($conn));
//     }
// }
?>
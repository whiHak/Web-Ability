<?php

$conn = mysqli_connect('localhost', 'root', '', 'webability');


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $full_name = mysqli_real_escape_string($conn, $_POST['full-name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm-password']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone-number']);
    $disability = mysqli_real_escape_string($conn, $_POST['disability']);
    

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["profile"]["name"]);
    move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);


    $sql = "INSERT INTO registration (fullName, email, password, gender, phoneNumber, disability, imageData) 
            VALUES ('$full_name', '$email', '$hashed_password', '$gender', '$phone_number', '$disability', '$target_file')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../pages/Signin.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


mysqli_close($conn);
?>

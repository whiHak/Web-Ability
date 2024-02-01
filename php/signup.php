<?php

session_start();

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
    $telegram = mysqli_real_escape_string($conn, $_POST['telegram']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $fileName = basename($_FILES["profile"]["name"]);

    $targetDirectory1 = "../uploads/";
    $targetFile1 = $targetDirectory1 . $fileName;
    move_uploaded_file($_FILES["profile"]["tmp_name"], $targetFile1);

    $targetDirectory2 = "../admin/uploads/";
    $targetFile2 = $targetDirectory2 . $fileName;
    copy($targetFile1, $targetFile2);

    $countemail = 0;
    $check = "SELECT email FROM registration";
    $result = mysqli_query($conn, $check);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['email'] == $email)
            $countemail++;
    }

    if ($countemail > 0) {
        $_SESSION['emailError'] = true;
        header('Location: ../pages/SignUp.php');
    } else {
        $sql = "INSERT INTO registration(fullName, email, password, gender, phoneNumber, disability, imageData, telegram) 
        VALUES ('$full_name', '$email', '$hashed_password', '$gender', '$phone_number', '$disability', '$targetFile1', '$telegram')";

        if (mysqli_query($conn, $sql)) {
            header('Location: ../pages/Signin.php');
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

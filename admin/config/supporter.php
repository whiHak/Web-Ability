<?php

$conn = mysqli_connect('localhost', 'root', '', 'webability');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = mysqli_real_escape_string($conn, $_POST['helper-name-input']);
    $email = mysqli_real_escape_string($conn, $_POST['helper-email-input']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['helper-phone-input']);
    $location = mysqli_real_escape_string($conn, $_POST['helper-location-input']);
    $telegram = mysqli_real_escape_string($conn, $_POST['helper-telegram-input']);

    $target_dir = "../uploads/";
    $target_dir2 = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["helper-image-input"]["name"]);
    $target_file2 = $target_dir2 . basename($_FILES["helper-image-input"]["name"]);

    if (move_uploaded_file($_FILES["helper-image-input"]["tmp_name"], $target_file)) {

        if (copy($target_file, $target_file2)) {

            $sql = "INSERT INTO supporters(fullName, email, phoneNumber, telegram, location, imageData) 
                    VALUES ('$full_name', '$email', '$phone_number', '$telegram', '$location', '$target_file')";

            if (mysqli_query($conn, $sql)) {
                header('Location: ../pages/helpers.php');
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Error copying file to the second location.";
        }
    } else {
        echo "Error moving file to the first location.";
    }
}

mysqli_close($conn);

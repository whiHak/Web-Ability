<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'webability');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM registration WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['fullName'] = $row['fullName'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['imageData'] = $row['imageData'];
                $_SESSION['accountDisabilityType'] = $row['disability'];

                header('Location: ../pages/Home.php');
                exit();
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "User not found. Please register first.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (!isset($_SESSION['id'])) {
    header('Location: ../pages/Signin.php');
    exit();
}

mysqli_close($conn);
?>

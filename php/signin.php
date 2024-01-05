<?php

if(isset($_POST("signin"))){
    $email = $_POST("email");
    $password = $_POST("password");

    $conn = new mysqli('localhost', 'root', '', 'webability');

    $sql = "SELECT * FROM registration where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if($user){
        if(password_verify($password, $user["password"])){
            // header("Location: ../pages/Signin.php");
        }
    }else{
        //Handele no email
    }
    $conn->close()

}

?>

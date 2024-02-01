<?php

$conn = mysqli_connect('localhost', 'root', '', 'webability');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $eventTitle = mysqli_real_escape_string($conn, $_POST['event-title-input']);
        $eventDescription = mysqli_real_escape_string($conn, $_POST['event-description-input']);
        $eventLink = mysqli_real_escape_string($conn, $_POST['event-link-input']);

        $targetDirectory1 = "../uploads/";
        $targetDirectory2 = "../../uploads/";

        $fileName = basename($_FILES["event-image-input"]["name"]);
        $targetFile1 = $targetDirectory1 . $fileName;
        $targetFile2 = $targetDirectory2 . $fileName;

        if (move_uploaded_file($_FILES["event-image-input"]["tmp_name"], $targetFile1)) {

            if (copy($targetFile1, $targetFile2)) {

                $sql = "INSERT INTO events (title, description, link, imageData) VALUES ('$eventTitle', '$eventDescription', '$eventLink', '$targetFile1')";
                if (mysqli_query($conn, $sql)) {
                    header("Location: ../pages/event-listings.php");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            } else {
                echo "Error copying file to the second directory.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

mysqli_close($conn);

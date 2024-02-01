<!DOCTYPE html>
<html>

<head>
  <title>Event Details</title>
  <link rel="stylesheet" href="../CSS/main.css">
  <link rel="shortcut icon" href="../../assets/logo.png" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <div class="page">
    <h1>Event Details</h1>
    <div class="logo"><i class='bx bx-handicap'></i> WebAbility</div>
  </div>
  <header>
    <p><i class='bx bxs-doughnut-chart'></i> Admin dashboard</p>
    <nav>
      <a href="user-information.php">User Information</a>
      <a href="helpers.php">Helpers</a>
      <a href="event-listings.php">Event Listings</a>
    </nav>
  </header>

  <div class="mainbody">
    <section>
      <div id="event-container">

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'webability');

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST["delete"])) {
          $eventId = $_POST["event_id"];
          $sql = "DELETE FROM events WHERE id = $eventId";
          if (mysqli_query($conn, $sql)) {
          } else {
            echo "Error deleting event: " . mysqli_error($conn);
          }
        }

        $sql = "SELECT * FROM events";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="event">';
            echo '<img src="' . $row['imageData'] . '" alt="Event Image">';
            echo '<div class="event-info">';
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p><strong>Description:</strong> ' . $row['description'] . '</p>';
            echo '<a href="' . $row['link'] . '">Event Link</a>';
            echo '<form method="post">';
            echo '<input type="hidden" name="event_id" value="' . $row['id'] . '">';
            echo '<button type="submit" name="delete" class="delete-button">Delete Event</button>';
            echo '</form>';
            echo '</div>'; 
            echo '</div>'; 
          }
        } else {
          echo "0 results";
        }

        mysqli_close($conn);
        ?>
      </div>

      <div id="add-form">
        <h2>Add Event</h2>
        <form id="event-form" action="event-listings.php" method="post" enctype="multipart/form-data">
          <label for="event-image-input">Event Image:</label>
          <input type="file" id="event-image-input" name="event-image-input" required accept="image/*">

          <label for="event-title-input">Event Title:</label>
          <input type="text" id="event-title-input" name="event-title-input" required>

          <label for="event-description-input">Event Description:</label>
          <textarea id="event-description-input" name="event-description-input" required></textarea>

          <label for="event-link-input">Event Link:</label>
          <input type="text" id="event-link-input" name="event-link-input" required>

          <button type="submit" name="submit">Save</button>
        </form>
      </div>

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


          $targetDirectory = "../uploads/";
          $targetFile = $targetDirectory . basename($_FILES["event-image-input"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
          $check = getimagesize($_FILES["event-image-input"]["tmp_name"]);
          if ($check !== false) {
            $uploadOk = 1;
          } else {
            echo "File is not an image.";
            $uploadOk = 0;
          }

          if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }

          if ($uploadOk == 0) {
          } else {

            if (move_uploaded_file($_FILES["event-image-input"]["tmp_name"], $targetFile)) {
              $sql = "INSERT INTO events (title, description, link, imageData) VALUES ('$eventTitle', '$eventDescription', '$eventLink', '$targetFile')";
              if (mysqli_query($conn, $sql)) {
                header("Location: event-listings.php");
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
        }
      }

      mysqli_close($conn);
      ?>

      <button onclick="addEvent()">Add Event</button>
    </section>
  </div class="mainbody">

  <script>
    function addEvent() {
      document.getElementById("add-form").style.display = "block";
    }
  </script>
</body>

</html>
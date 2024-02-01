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
   <h1>Supporters</h1> 
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
      <h2>Helpers List</h2>
      <div id="helpers-list">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $conn = mysqli_connect('localhost', 'root', '', 'webability');

        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_POST["delete"])) {
          $supporterId = $_POST["supporter_id"];
          $sql = "DELETE FROM supporters WHERE id = $supporterId";
          if (mysqli_query($conn, $sql)) {
          } else {
            echo "Error deleting event: " . mysqli_error($conn);
          }
        }

        $sql = "SELECT * FROM supporters";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
          die("Error retrieving supporters: " . mysqli_error($conn));
        }

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="helper">';
            echo '<img src="' . $row['imageData'] . '" alt="supporter Image">';
            echo '<div class="helper-info">';
            echo '<p> Name: ' . $row['fullName'] . '</p>';
            echo '<p> Email: ' . $row['email'] . '</p>';
            echo '<p> Phone: ' . $row['phoneNumber'] . '</p>';
            echo '<p> Location: ' . $row['location'] . '</p>';
            echo '<form method="post" action="helpers.php">';
            echo '<input type="hidden" name="supporter_id" value="' . $row['id'] . '">';
            echo '<button type="submit" name="delete" class="delete-button">Delete Supporter</button>';
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
    </section>
    
    <section>
      <h2>Add Helper</h2>
      <div class="add-form" id="add-form">
        <form id="helper-form" action="../config/supporter.php" method="post" enctype="multipart/form-data">
          <label for="helper-name-input">Name:</label>
          <input type="text" id="helper-name-input" name="helper-name-input" required>
    
          <label for="helper-email-input">Email:</label>
          <input type="email" id="helper-email-input" name="helper-email-input" required>
    
          <label for="helper-phone-input">Phone:</label>
          <input type="tel" id="helper-phone-input" name="helper-phone-input" required>
    
          <label for="helper-phone-input">Telegram:</label>
          <input type="tel" id="helper-telegram-input" name="helper-telegram-input" required>
    
          <label for="helper-location-input">Location:</label>
          <input type="text" id="helper-location-input" name="helper-location-input" required>
    
          <label for="helper-image-input">Image:</label>
          <input type="file" id="helper-image-input" name="helper-image-input" accept="image/*" required>
    
          <button type="submit">Save</button>
        </form>
      </div>
      <button onclick="showAddForm()">Add Helper</button>
    </section>
  </div>

  <script>
    function showAddForm() {
      document.getElementById("add-form").style.display = "block";
    }
  </script>
</body>
</html>
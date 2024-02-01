<div id="support-page-wrapper">
  <div class="title">
    <h2>Get Help</h2>
    <p>
      Find mentors, caregivers, and professionals ready to help you.
      Reach out for the support you need to thrive.
    </p>
  </div>

  <div class="support-wrapper">

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'webability');

    if (!$conn) {
      die('Connection failed: ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM supporters";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      $next = 1;
      while ($row = mysqli_fetch_assoc($result)) {
        $fullName = $row['fullName'];
        $email = $row['email'];
        $phoneNumber = $row['phoneNumber'];
        $telegram = $row['telegram'];
        $location = $row['location'];
        $imageData = $row['imageData'];

        echo "<div id='card-$next' class='card'>";
        echo "<img src='$imageData' alt='Support banner' />";
        echo "<div class='info'>";
        echo "<div class='detail-info'>";
        echo "<h1>$fullName</h1>";
        echo '<p>' . '<i class="bx bx-phone"></i>' . 'Phone: <br />';
        echo "$phoneNumber";
        echo "</p>";

        echo '<p>' . '<i class="bx bxl-telegram"></i>' . 'Telegram: <br />';
        echo "$telegram";
        echo "</p>";

        echo '<p>' . '<i class="bx bx-envelope"></i>' . 'Email: <br />';
        echo "$email";
        echo "</p>";

        echo '<p>' . '<i class="bx bx-current-location"></i>' . 'Location: <br />';
        echo "$location";
        echo "</p>";

        echo "</div>" . "</div>";
        $next++;
        echo "<button><a href='#card-$next'><i class='bx bx-right-arrow-alt'></i></a></button>";
        echo "</div>";
      }

      mysqli_free_result($result);
    } else {
      echo "Error: " . mysqli_error($conn);
    }
    ?>
  </div>
</div>
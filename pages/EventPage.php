<div id="Event-page-wrapper">
  <h1>Events</h1>
  <div class="Event-Listings">
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'webability');

    if (!$conn) {
      die('Connection failed: ' . mysqli_connect_error());
    }
    $sql = "SELECT * FROM events";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {

        $imageData = $row['imageData'];
        $title = $row['title'];
        $link = $row['link'];
        $description = $row['description'];

        echo "<div class='event'>";
        echo "<img src='$imageData' alt='Event image' />";
        echo "<div class='Event-description'>";
        echo "<p class= 'eventtitle' >$title</p>";
        echo "<p class='eventdiscription' >$description</p>";
        echo "<button class='link' ><a href='$link' target='_blank'>Learn More <i class='bx bx-right-arrow-alt icon'></i></a></button>";
        echo "</div>";
        echo "</div>";
      }
      mysqli_free_result($result);
    } else {
      echo "Error: " . mysqli_error($conn);
    }

    // mysqli_close($conn);

    ?>
  </div>
</div>
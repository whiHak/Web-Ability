<div id="community-wrapper">
  <div class="title">
    <h2>Networking</h2>
    <p>Building Connections and Networks for Differently-Abled Individuals.</p>
  </div>

  <!-- <div class="search-bar">
            <input type="text" id="search" placeholder="Search..." />
            <i class="bx bx-search-alt-2"></i>
          </div> -->

  <div class="searched-users">
    <?php
      $conn = mysqli_connect('localhost', 'root', '', 'webability');

      if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
      }

      $limit = 8;
      $sql = "SELECT * FROM registration WHERE disability='" . $_SESSION['accountDisabilityType'] . "' LIMIT $limit";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          if($row['id'] == $_SESSION['id']){
            continue;
          }

          $phoneNumber = $row['phoneNumber'];
          $telegram = $row['telegram'];
          $gender = $row['gender'];
          $imageData = $row['imageData'];
          $fullName = $row['fullName'];

          echo "<div class='user'>";
          echo "<img src='$imageData' alt='profile' />";
          echo "<p>$fullName</p>";
          echo "<div class='user-info'>";
          echo "<p><i class='bx bxs-phone-call'></i>   $phoneNumber</p>";
          echo "<p><i class='bx bxl-telegram'></i>   $telegram </p>";
          echo "<p><i class='bx bx-male-female'></i>   $gender</p>";
          echo "</div>";
          echo "</div>";
        }
        mysqli_free_result($result);
      }else {
        echo "Error: " . mysqli_error($conn);
      }

      // mysqli_close($conn);

    ?>
    <!-- <div class="user">
      <img src="../assets/hero.png" alt="profile" />
      <p>Manaye Beyene</p>
      <div class="user-info">
        <p><i class="bx bxs-phone-call"></i> 095645443</p>
        <p><i class="bx bxl-telegram"></i> @Byline Bookstore</p>
        <p><i class="bx bx-male-female"></i> Male</p>
      </div>
    </div>
    <div class="user">
      <img src="../assets/hero.png" alt="profile" />
      <p>Manaye Beyene</p>
      <div class="user-info">
        <p><i class="bx bxs-phone-call"></i> 095645443</p>
        <p><i class="bx bxl-telegram"></i> @Byline Bookstore</p>
        <p><i class="bx bx-male-female"></i> Male</p>
      </div>
    </div>
    <div class="user">
      <img src="../assets/hero.png" alt="profile" />
      <p>Manaye Beyene</p>
      <div class="user-info">
        <p><i class="bx bxs-phone-call"></i> 095645443</p>
        <p><i class="bx bxl-telegram"></i> @Byline Bookstore</p>
        <p><i class="bx bx-male-female"></i> Male</p>
      </div>
    </div>
    <div class="user">
      <img src="../assets/hero.png" alt="profile" />
      <p>Manaye Beyene</p>
      <div class="user-info">
        <p><i class="bx bxs-phone-call"></i> 095645443</p>
        <p><i class="bx bxl-telegram"></i> @Byline Bookstore</p>
        <p><i class="bx bx-male-female"></i> Male</p>
      </div>
    </div>
    <div class="user">
      <img src="../assets/hero.png" alt="profile" />
      <p>Manaye Beyene</p>
      <div class="user-info">
        <p><i class="bx bxs-phone-call"></i> 095645443</p>
        <p><i class="bx bxl-telegram"></i> @Byline Bookstore</p>
        <p><i class="bx bx-male-female"></i> Male</p>
      </div>
    </div> -->
  </div>
</div>

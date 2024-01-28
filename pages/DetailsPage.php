<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="stylesheet" href="../CSS/detailsPage.css" />
    <title>Document</title>
  </head>
  <body>

  <?php 
    session_start();

    if (!isset($_SESSION['id'])) {
      header('Location: ../pages/Signin.php');
      exit();
    }
  ?>
    <div class="details-wrapper">
      <?php 
        include("sidebar.php");
      ?>
      
      <div class="de-wrapper">
        <div class="logo"><i class='bx bx-handicap'></i> WebAbility</div>
        <?php 
          include("LearningPage.php");
          include("CommunityPage.php");
          include("SupportPage.php");
          include("EventPage.php");
        ?>

      </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
        const logOutBtn = document.getElementById('log-out');
        logOutBtn.addEventListener('click', function () {
          window.location.href = '../php/logout.php';
        });
      });
    </script>
    <script src="../JS/detailsPage.js"></script>
  </body>
</html>

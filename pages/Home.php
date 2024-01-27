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

    <div class="home">
      <div class="user">

        <div class="logo"><i class='bx bx-handicap'></i> WebAbility</div>

        <div class="user-info">

          <div class="main-info">
            <p class="name"><?php echo $_SESSION['fullName']; ?></p>
            <button><a href="#" id="log-out">Log out</a></button>
          </div>

          <div class="info-img">
            <img src="<?php echo $_SESSION['imageData']; ?>" alt="profile image" />
          </div>
      
        </div>

      </div>
      
      <div class="home-wrapper">
        <div class="left-wrapper">
          <h1>You Are <span>Not </span> Alone!</h1>
          <button><a href="./DetailsPage.php">Get Started</a></button>
        </div>

        <img src="../assets/home-page-image.svg" alt="">
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
    <script src="./JS/index.js"></script>
  </body>
</html>

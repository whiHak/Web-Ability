<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="shortcut icon" href="../assets/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../CSS/signform.css" />
  <link rel="stylesheet" href="../CSS/home.css" />
  <title>Web Ability</title>
</head>

<body>
  <div class="formContainer">
    <div class="logo"><i class="bx bx-handicap"></i> WebAbility</div>
    <div class="formWrapper signinwrapper">
      <form action="../php/signin.php" method="post">
        <span class="mainTitle">Web Ability</span>
        <span class="pageTitle">Login</span>
        <input type="email" placeholder="Email" name="email" />
        <input type="password" placeholder="Password" name="password" />
        <?php
        session_start();
        if (isset($_SESSION["emailError"])) {
          echo '<p class="emailerror">Incorrect Email or password</p>';
          session_destroy();
        }
        ?>
        <button class="login"><input type="submit" value="Sign in" /></button>
        <p><a href="./Signup.php">You don't have an account?</a></p>
      </form>
    </div>
  </div>

  <script src="../JS/index.js"></script>
</body>

</html>
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
    <link rel="stylesheet" href="../CSS/signform.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="formContainer">
      <div class="logo"><i class="bx bx-handicap"></i> WebAbility</div>
      <div class="formWrapper">
        <form action="../php/signup.php" method="post">
          <span class="mainTitle">Web Ability</span>
          <span class="pageTitle">Register</span>
          <input type="text" placeholder="Full Name" name="full-name" />
          <input type="email" placeholder="Email" name="email"/>
          <input type="password" placeholder="Password" name="password"/>
          <input type="password" placeholder="Confirm-password" name="confirm-password"/>

          <div class="gender-wrapper">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
              <option value="">Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>

          <input
            name="phone-number"
            type="text"
            placeholder="Phone Number"
            id="phone"
          />

          <div class="disability-wrapper">
            <label for="disability">Disability:</label>
            <select name="disability" id="disability" required>
              <option value="">Select Disability</option>
              <option value="visual impairment">Visual Impairment</option>
              <option value="mobility impairement">Mobility Impairment</option>
              <option value="hearing impairement">Hearing Impairment</option>
              <option value="developemental imapairment">Developmental Impairment</option>
              <option value="other">Other/Unspecified</option>
            </select>
          </div>
          <div class="other-impairment-wrapper" style="display: none">
            <label for="disability">Specify Disability:</label>
            <input name="disability" type="text" placeholder="" id="disability" />
          </div>

          <button class="register" ><input type="submit" value="Sign Up"></button>
          <p><a href="./Signin.html">You have an account?</a></p>
        </form>
      </div>
    </div>

    <script src="../JS/index.js"></script>
  </body>
</html>

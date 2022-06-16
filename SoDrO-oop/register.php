<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="css/register.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="./javascriptFiles/support.js"></script>
</head>

<body>
  <?php include "./assets/header.php" ?>


<div class="middle-container">
    <h1 id="login">Registration</h1>
    <form action="./includes/register.inc.php" method=POST>
      <div class="messageAfterRegister"   style="display:none"></div>
      <div class="form-item">
        <input type="text" name="email" id="email" placeholder="Enter your email...">
      </div>
      <div class="form-item">
        <input type="text" name="username" id="username" placeholder="Enter your username...">
      </div>
      <div class="form-item">
        <input type="password" name="password" id="password" placeholder="Enter your password...">
      </div>
      <div class="form-item">
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password...">
        </div>
    <button type="submit" name="submit" id="submit">Register</button >
    <p>Already have an account?<a class="login-account" href="login.php">Login now!</a></p>
    </form>
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="usernotfound"){
          echo '<script>', 'putMessageAfterRegister("Username/Email or password incorrect!");', '</script>';
        }
        if($_GET["error"]=="emptyinput"){
          echo '<script>', 'putMessageAfterRegister("Please fill out the fields to create an account!");', '</script>';
        }
        if($_GET["error"]=="username"){
          echo '<script>', 'putMessageAfterRegister("Only characters and numbers are allowed for username!");', '</script>';
        }
        if($_GET["error"]=="email"){
          echo '<script>', 'putMessageAfterRegister("Invalid email format!");', '</script>';
        }
        if($_GET["error"]=="passwordmatch"){
          echo '<script>', 'putMessageAfterRegister("Passwords do not match!");', '</script>';
        }
        if($_GET["error"]=="useroremailtaken"){
          echo '<script>', 'putMessageAfterRegister("Username or email taken!");', '</script>';
        }
        if($_GET["error"]=="passwordtooshort"){
          echo '<script>', 'putMessageAfterRegister("Password must be at least 6 characters!");', '</script>';
        }
      }
      ?>
</div>
  
  <?php include "./assets/footer.php" ?>
</body>

</html>

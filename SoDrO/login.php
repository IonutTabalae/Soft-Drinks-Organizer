<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="./javascriptFiles/support.js"></script>
</head>

<body>
  <?php include "./assets/header.php" ?>

  <div class="middle-container">
    <h1 id="login">Login</h1>
    <div class="messageAfterLogin" style="display:none"></div>
    <form action="./includes/login.inc.php" method="POST">
      <div class="form-item">
        <span class="material-icons-outlined">
          account_circle
        </span>
        <input type="text" name="username" id="username" placeholder="Email or username...">
      </div>
      <div class="form-item">
        <span class="material-icons-outlined">
          lock
        </span>
        <input type="password" name="password" id="password" placeholder="Enter password...">
      </div>
      <button type="submit" name="submit" id="submitLogin">
        Login
      </button>

      <p>New user? <a class="create-account" href="register.php">Create an account</a></p>
    </form>
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="usernotfound"){
          echo '<script>', 'putMessageAfterLogin("Username/Email or password incorrect!");', '</script>';
        }
        if($_GET["error"]=="emptyinput"){
          echo '<script>', 'putMessageAfterLogin("Please fill out the fields to login!");', '</script>';
        }
      }
      ?>
  </div>


  <?php include "./assets/footer.php" ?>
</body>

</html>

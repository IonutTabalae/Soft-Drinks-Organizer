<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="../../back/javascriptFiles/support.js"></script>
</head>

<body>
  <header>
    <p class="logo">Soft<span style="color:#FF7426">Drinks</span>Organizer<span style="color:#FF7426">.</span></p>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="../about-us-page/index.php">About</a></li>
        <li><a href="../contact-us-page/index.php">Contact</a></li>
      </ul>
    </nav>
    <?php
    
    if(isset($_SESSION["userId"]) ){
      echo "<a class='login' href='../../back/phpFiles/logout.php'>Log Out</a>";
      echo "<a class='login' href='../profile-page/index.php'>Profile</a>";
    }
    else{
      echo " <a class='login' href='../login-page/index.php'>Login/Register</a> ";
    }
    ?>
    <!-- <a class="login" href="">Login/Register</a> -->
  </header>

  <div class="middle-container">
    <h1 id="login">Login</h1>
    <div class="messageAfterLogin" style="display:none"></div>
    <form  method=POST action="../../back/phpFiles/login.php">
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
      <button type="submit" name="submitLogin" id="submitLogin" placeholder="Login">
        Login
      </button>
      <!--<p>Or login using</p>-->
      <p>New user? <a class="create-account" href="../register-page/index.php">Create an account</a></p>
    </form>

    <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="IncorrectCredentias"){
          echo '<script>', 'putMessageAfterLogin("Username/Email or password incorrect!");', '</script>';
        }
        if($_GET["error"]=="emptyFields"){
          echo '<script>', 'putMessageAfterLogin("Please fill out the field to login!");', '</script>';
        }
      }
      ?>
      
  </div>
  <!-- <script src="/SoDrO/back/javascriptFiles/login.js"></script> -->

  <div class="bottom-container">
    <div>
      <p class="logo">Soft<span style="color:#FF7426">Drinks</span>Organizer<span style="color:#FF7426">.</span></p>
      <p class="logo-description">Best place to find the drinks you want.</p>
    </div>
    <ul class="bottom-links">
      <li><a href="../contact-us-page/index.html">Contact</a></li>
      <li><a href="../about-us-page/index.html">About Us</a></li>
    </ul>
  </div>
  <footer>
    <ul>
      <li><a href="https://www.instagram.com/">Instagram</a></li>
      <li><a href="https://www.facebook.com/">Facebook</a></li>
    </ul>
    <a class="copyright">© 2022 Soft Drinks Organizer(SoDrO)</a>
  </footer>
</body>

</html>
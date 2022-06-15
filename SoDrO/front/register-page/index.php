<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/register.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
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
    <h1 id="login">Registration</h1>
    <div class="messageAfterRegister"   style="display:none"></div>
    <form>
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
    <button type="submit" name="submit" id="submit">
     Register
    </button >
    <p>Already have an account?<a class="login-account" href="../login-page/index.php">Login now!</a></p>
    </form>
</div>

	<script src="/SoDrO/back/javascriptFiles/createAcc.js"></script>
  <?php include '../assets/footer.php' ?>
</body>

</html>

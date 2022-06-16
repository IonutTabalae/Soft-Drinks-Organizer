<?php session_start(); ?>
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

</head>

<body>
  <header>
    <p class="logo">Soft<span style="color:#FF7426">Drinks</span>Organizer<span style="color:#FF7426">.</span></p>
    <nav>
      <ul class="nav-links">
				<?php
						if(isset($_SESSION["userId"]))
						{
				?>
        		<li><a href="#">Home</a></li>
        		<li><a href="../about-us-page/index.php">About</a></li>
        		<li><a href="../contact-us-page/index.php">Contact</a></li>
						<li><a href="../shopping-list-page/index.php">Shopping List</li>
				<?php
						}
						else
						{
				?>
						<li><a href="#">Home</a></li>
        		<li><a href="../about-us-page/index.php">About</a></li>
        		<li><a href="../contact-us-page/index.php">Contact</a></li>
				<?php
						}
				?>
      </ul>
    </nav>
		<a class="login" href="">Login/Register</a>
  </header>

  <div class="middle-container">
    <h1 id="login">Login</h1>

    <form action="../includes/login.inc.php" method="POST">
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
      <button type="submit" name="submit" id="submitLogin" placeholder="Login">
        Login
      </button>

      <p>New user? <a class="create-account" href="../register-page/index.php">Create an account</a></p>
    </form>
  </div>

  <?php include '../assets/footer.php' ?>
</body>

</html>

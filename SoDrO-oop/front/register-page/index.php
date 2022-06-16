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
    </nav>
    <a class="login" href="">Login/Register</a>
  </header>


<div class="middle-container">
    <h1 id="login">Registration</h1>
    <form action="../includes/register.inc.php" method=POST>
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
    <p>Already have an account?<a class="login-account" href="../login-page/index.php">Login now!</a></p>
    </form>
</div>

  <?php include '../assets/footer.php' ?>
</body>

</html>

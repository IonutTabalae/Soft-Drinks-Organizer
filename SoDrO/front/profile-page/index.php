<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Profile</title>
  <link rel="stylesheet" href="css/about-us.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
</head>


<body>
  <header>
    <p class="logo">Soft<span style="color:#FF7426">Drinks</span>Organizer<span style="color:#FF7426">.</span></p>
    <nav>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a class="active" href="../about-us-page/index.php">About</a></li>
        <li><a href="../contact-us-page/index.php">Contact</a></li>
      </ul>
    </nav>
    <?php
                if(isset($_SESSION["userId"]) ){
                  echo "<a class='login' href='../../back/phpFiles/logout.php'>Log Out</a>";
                  echo "<a class='login' href='../profile-page/index.html'>Profile</a>";
                }
                else{
                  echo " <a class='login' href='../login-page/index.php'>Login/Register</a> ";
                }
                ?>
    <!-- <a class="login" href="../login-page/index.php">Login/Register</a> -->
  </header>

  <div class="middle-container">
    <div class="row">
      <div class="column">
        <div class="profile-pic-div">
          <img src="images/basic-profile-picture.jpg" alt="profile-picture">
          <label class="custom-photo-upload">
            <input type="file" name="profile-pic" accept="image/*" />Change Profile Picture</label>
        </div>
        <div class="description-div">
          <h3>Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nullam viverra interdum mi,
            t fringilla ex. Aenean eget egestas urna. Vestibulum
            felis nisl, sollicitudin quis sapien vitae, faucibus
            pretium risus. Mauris vitae facilisis metus, sit amet
            feugiat nibh. In faucibus ligula venenatis erat aliquam,
            quis dignissim justo tempus. Mauris tempor tincidunt
            eleifend. Cras fermentum libero eu nulla cursus varius. Curabitur sed nibh nisi</p>
        </div>
      </div>

      <div class="column">
        <h2>Personal Information</h2>
        <form>
          <input type="Submit" value="Update Personal Info">
          <div class="input-row">
            <p class="input-explanation">FULL NAME</p>
            <input type="text" name="Full Name" placeholder="<?php
             echo $_SESSION['userFullname'];?>">
          </div>
          <div class="input-row">
            <p class="input-explanation">USERNAME</p>
            <input type="text" name="username" placeholder="<?php
             echo $_SESSION['userUsername'];?>">
          </div>
          <div class="input-row">
            <p class="input-explanation">EMAIL</p>
            <input type="email" name="email" placeholder="<?php
             echo $_SESSION['userEmail'];?>">
             
          </div>
        </form>

        <form>
          <input type="Submit" value="Change Password">
          <div class="input-row">
            <p class="input-explanation">PASSWORD</p>
            <input type="password" name="new-password" placeholder="Enter your new password..." required>
          </div>
          <div class="input-row">
            <p class="input-explanation">REPEAT PASSWORD</p>
            <input type="password" name="repeat-new-password" placeholder="Enter your new password again..." required>
          </div>
        </form>

      </div>

    </div>
  </div>

  <<?php include '../assets/footer.php' ?>
</body>

</html>

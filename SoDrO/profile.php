<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Profile</title>
  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="css/profile.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="./javascriptFiles/support.js"></script>
</head>

<body>
  <?php include "./assets/header.php" ?>

  <div class="middle-container">
    <div class="row">
      <div class="column">
        <div class="profile-pic-div">
          <img src="images/profilePics/<?php echo "{$_SESSION['image']}"; ?>" alt="profile-picture">
          <form action="./includes/uploadProfilePic.php" method="post" enctype="multipart/form-data" style="margin-top: 10px;">
            <label class="custom-photo-upload"><input type="file" name="profile-pic" accept="image/x-png, image/jpeg" />Change Profile Picture</label>
            <button style="margin:0; font-family: 'Inter' " type="submit" name="upload">Upload</button>
          </form>
        </div>
        <div class="description-div">
          <div class="messageAfterUpdateProfile"   style="display:none"></div>
          <h3>Description</h3>
          <form method=POST action="./includes/profileDescription.inc.php">
            <div class="input-row">
            <input class="description" type="text" name="newDescription" placeholder=
            "<?php echo $_SESSION["description"]; ?>">
            </div>
            <input type="Submit" name="submitDescription" id="submitDescription" value="Update description" >
          </form>
        </div>
      </div>

      <div class="column">
        <h2>Personal Information</h2>
        <form method=POST action="./includes/profile.inc.php">
          <input type="Submit" name="submitUpdateProfile" id="submitUpdateProfile" value="Update Personal Info">
          <div class="input-row">
            <p class="input-explanation">FULL NAME</p>
            <input type="text" name="newFullname" placeholder="<?php
                                                              echo $_SESSION["fullname"]; ?>">
          </div>
          <div class="input-row">
            <p class="input-explanation">USERNAME</p>
            <input type="text" name="newUsername" placeholder="<?php
                                                            echo $_SESSION["username"]; ?>">
          </div>
          <div class="input-row">
            <p class="input-explanation">EMAIL</p>
            <input type="email" name="newEmail" placeholder="<?php
                                                          echo $_SESSION["email"]; ?>">
          </div>
        </form>

        <form method=POST action="./includes/userPassword.inc.php">
          <div class="messageAfterUpdatePassword"   style="display:none"></div>
          <input type="Submit" name ="changePassword" id = "changePassword" value="Change Password">
          <div class="input-row">
            <p class="input-explanation">PASSWORD</p>
            <input type="password" name="newPassword" placeholder="Enter your new password..." required>
          </div>
          <div class="input-row">
            <p class="input-explanation">REPEAT PASSWORD</p>
            <input type="password" name="repeatNewPassword" placeholder="Enter your new password again..." required>
          </div>
        </form>

      </div>

    </div>
    <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="passwordToShort"){
          echo '<script>', 'putMessageAfterChangePassword("Password too short!");', '</script>';
        }
        if($_GET["error"]=="passwordDontMatch"){
          echo '<script>', 'putMessageAfterChangePassword("Password not matching!");', '</script>';
        }

      }
      ?>
  </div>

  <?php include "./assets/footer.php" ?>
</body>

</html>

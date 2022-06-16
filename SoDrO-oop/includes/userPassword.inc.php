<?php
session_start();

if(isset($_POST['changePassword'])){

$password         = $_POST["newPassword"];
$repeatPassword   = $_POST["repeatNewPassword"];

if( $password === $repeatPassword){
  if(strlen($password) < 6)
  {
    header("location: ../profile.php?error=passwordToShort");
    exit();
  }
  else{
    include "../classes/database.classes.php";
    include "../classes/profile.classes.php";

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $profile = new Profile();
    $userId = $_SESSION["userId"];
    $result = $profile -> updatePassword($hashedPassword,$userId);
  }
  header("location: ../profile.php");
  exit();
}
else{
  header("location: ../profile.php?error=passwordDontMatch");
  exit();
}
}

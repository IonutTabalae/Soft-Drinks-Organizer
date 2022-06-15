<?php


if(isset($_POST['submitUpdateProfile'])){
include "Database.php";
$database = new Database();
$db = $database->connect();


$newEmail    = $_POST['newEmail'];
$newUsername = $_POST['newUsername'];
$newFullname = $_POST['newFullname'];


$result = $database->updateProfile($newFullname,$newEmail,$newUsername);
if($result == 1){
  session_start();
  $_SESSION["userUsername"] = $newUsername;
  $_SESSION["userEmail"] = $newEmail ;
  $_SESSION["userFullname"] = $newFullname;
  header("location:http://localhost/SoDrO/front/profile-page/index.php");
}
else{
  session_start();
  header("location:http://localhost/SoDrO/front/about-us=page/index.php");
}

}

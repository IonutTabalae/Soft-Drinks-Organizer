<?php
session_start();

if(isset($_POST['submitUpdateProfile'])){

$newEmail       = $_POST['newEmail'];
$newUsername    = $_POST['newUsername'];
$newFullname    = $_POST['newFullname'];
$userId         = $_SESSION['userId'];
include "../classes/database.classes.php";
include "../classes/profile.classes.php";

$profile = new Profile();
$result = $profile -> updateProfile($newEmail,$newUsername,$newFullname,$userId);
header("location:../profile.php");
}

<?php
session_start();

if(isset($_POST['submitDescription'])){

$newDescription = $_POST["newDescription"];
include "../classes/database.classes.php";
include "../classes/profile.classes.php";

$profile = new Profile();
$result = $profile -> updateDescription($newDescription,$userId);
header("location:../profile.php");
}

<?php

$_SESSION = -1;
if(isset($_POST['submitLogin'])){
//creating a new sessioon
// if the submitLogin button is pressed

include "Database.php";
$database = new Database();
$db = $database->connect();

if ($_POST['username']!="" && $_POST['password'] != "") {
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];

    $query = "select * from users where ( username='" . $username1 . "' OR email='" . $username1 . "') and password = '" . $password1. "'";

    $queryResult = mysqli_query($db, $query);
    $queryNumberRowsResult = mysqli_num_rows($queryResult);

    if ($queryNumberRowsResult == 1) {

        if ($username1 == "admin" && $password1 == "admin") {
            session_start();
            $userId = $database->getUserByUsernameAndPassword($username1,$password1);
            $userEmail = $database->getUserEmailByCredentials($username1,$password1);
            $userUsername = $database->getUserUsernameByCredentials($username1,$password1);
            $userFullname = $database->getFullnameByCredentials($username1,$password1);
            $_SESSION["userId"] = $userId;
            $_SESSION["userEmail"] = $userEmail;
            $_SESSION["userUsername"] = $userUsername;
            $_SESSION["userFullname"] = $userFullname;
            $_SESSION["userPw"] = $password1;
            header("location: http://localhost/SoDrO/front/contact-us-page/index.php");
        } else {
            session_start();
            $userId = $database->getUserByUsernameAndPassword($username1,$password1);
            $userEmail = $database->getUserEmailByCredentials($username1,$password1);
            $userUsername = $database->getUserUsernameByCredentials($username1,$password1);
            $userFullname = $database->getFullnameByCredentials($username1,$password1);
            $_SESSION["userId"] = $userId;
            $_SESSION["userEmail"] = $userEmail;
            $_SESSION["userFullname"] = $userFullname;
            $_SESSION["userUsername"] = $userUsername;
            $_SESSION["userPw"] = $password1;
            header("location: http://localhost/SoDrO/front/about-us-page/index.php");
        }
    } 
    else {
        header("location: http://localhost/SoDrO/front/login-page/index.php?error=IncorrectCredentias");
        
        exit();
       
        
    }
} 
else {
     header("location: http://localhost/SoDrO/front/login-page/index.php?error=emptyFields");
    exit();
}
}

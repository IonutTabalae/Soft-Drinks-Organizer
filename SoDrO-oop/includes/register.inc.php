<?php

if(isset($_POST["submit"])) {

  // Grabbing the data
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  // Instantiate SignupContr class
  include "../classes/database.classes.php";
  include "../classes/register.classes.php";
  include "../classes/register-contr.classes.php";
  $register = new RegisterContr($email, $username, $password, $confirm_password);

  // Running error handlers and user register
  $register->registerUser();

  // Going back to front page
  header("location: ../register.php?error=none");
}
else {

}

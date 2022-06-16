<?php

class RegisterContr extends Register {

  private $email;
  private $username;
  private $password;
  private $confirm_password;

  public function __construct($email, $username, $password, $confirm_password) {

    $this->email = $email;
    $this->username = $username;
    $this->password = $password;
    $this->confirm_password = $confirm_password;
  }

  public function registerUser() {
    if ($this->emptyInput() == false) {
      //TODO
      header("location: ../register-page/index.php?error=emptyinput");
      exit();
    }
    if ($this->invalidUsername() == false) {
      //TODO
      header("location: ../register-page/index.php?error=username");
      exit();
    }
    if ($this->invalidEmail() == false) {
      //TODO
      header("location: ../register-page/index.php?error=email");
      exit();
    }
    if ($this->passwordMatch() == false) {
      //TODO
      header("location: ../register-page/index.php?error=passwordmatch");
      exit();
    }
    if ($this->usernameOrEmailTakenCheck() == false) {
      //TODO
      header("location: ../register-page/index.php?error=useroremailtaken");
      exit();
    }
    if($this->passwordLengthCheck() == false){
      header("location: ../register-page/index.php?error=passwordtooshort");
      exit();
    }

    $this->setUser($this->username, $this->password, $this->email);
  }

  private function emptyInput() {
    $result;
    if (empty($this->email) || empty($this->username) || empty($this->password) || empty($this->confirm_password)) {
      $result = false;
    }
    else {
      $result = true;
    }
    return $result;
  }

  private function invalidUsername() {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
      $result = false;
    }
    else {
      $result = true;
    }
    return $result;
  }

  private function invalidEmail() {
      $result;
      if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
      }
      else {
        $result = true;
      }
      return $result;
  }

  private function passwordMatch() {
    $result;
    if ($this->password !== $this->confirm_password) {
      $result = false;
    }
    else {
      $result = true;
    }
    return $result;
  }

  private function passwordLengthCheck() {
    $result;
    if (strlen($this->password) < 6) {
      $result = false;
    }
    else {
      $result = true;
    }
    return $result;
  }

  private function usernameOrEmailTakenCheck() {
    $result;
    if (!$this->checkUser($this->username, $this->email)) {
      $result = false;
    }
    else {
      $result = true;
    }
    return $result;
  }
}

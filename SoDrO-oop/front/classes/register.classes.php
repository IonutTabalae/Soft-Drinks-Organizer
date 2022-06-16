<?php

class Register extends Database {

  protected function setUser($username, $password, $email) {
    $stmt = $this->connect()->prepare('INSERT INTO users (email, username, password) VALUES (?, ?, ?)');

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (!$stmt->execute(array($email, $username, $hashedPassword))) {
      $stmt = null;
      header("location: ../register-page/index.php?error=stmtfailedset");
      exit();
    }

    $stmt = null;
  }

  protected function checkUser($username, $email) {
    $stmt = $this->connect()->prepare('SELECT username FROM users WHERE username = ? OR email = ?;');

    if(!$stmt->execute(array($username, $email))) {
      $stmt = null;
      header("location: ../register-page/index.php?error=stmtfailedcheck");
      exit();
    }

    $resultCheck;
    if ($stmt->rowCount() > 0) {
      $resultCheck = false;
    }
    else {
      $resultCheck = true;
    }

    return $resultCheck;
  }

}

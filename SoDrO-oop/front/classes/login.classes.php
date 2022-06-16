<?php

class Login extends Database {

  protected function getUser($username, $password) {
    $stmt = $this->connect()->prepare('SELECT password FROM users WHERE username = ? OR email = ?;');

    if (!$stmt->execute(array($username, $password))) {
      $stmt = null;
      header("location: ../login-page/index.php?error=stmtfailedget");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../login-page/index.php?error=usernotfound");
      exit();
    }

    $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPassword = password_verify($password, $passwordHashed[0]["password"]);

    if ($checkPassword == false) {
      $stmt = null;
      header("location: ../login-page/index.php?error=wrongpassword");
      exit();
    }
    elseif ($checkPassword == true) {
      $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?;');

      if (!$stmt->execute(array($username, $username, $password))) {
        $stmt = null;
        header("location: ../login-page/index.php?error=stmtfailed");
        exit();
      }

      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("location: ../login-page/index.php?error=usernotfound");
        exit();
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();
      $_SESSION["userId"] = $passwordHashed[0]["password"];
      $_SESSION["username"] = $user[0]["username"];
    }

    $stmt = null;
  }

}

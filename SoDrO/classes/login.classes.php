<?php

class Login extends Database {

  protected function getUser($username, $password) {
    $stmt = $this->connect()->prepare('SELECT password FROM users WHERE username = ? OR email = ?;');

    if (!$stmt->execute(array($username, $username))) {
      $stmt = null;
      header("location: ../login.php?error=stmtfailedget");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../login.php?error=usernotfound");
      exit();
    }

    $passwordHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPassword = password_verify($password, $passwordHashed[0]["password"]);

    if ($checkPassword == false) {
      $stmt = null;
      header("location: ../login.php?error=wrongpassword");
      exit();
    }
    elseif ($checkPassword == true) {
      $stmt = $this->connect()->prepare('SELECT * FROM users WHERE username = ? OR email = ? AND password = ?;');

      if (!$stmt->execute(array($username, $username, $passwordHashed[0]["password"]))) {
        $stmt = null;
        header("location: ../login.php?error=stmtfailed");
        exit();
      }

      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header("location: ../login.php?error=usernotfound");
        exit();
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();
      $_SESSION["userId"]      = $user[0]["id"];
      $_SESSION["username"]    = $user[0]["username"];
      $_SESSION["fullname"]    = $user[0]["fullname"];
      $_SESSION["email"]       = $user[0]["email"];
      $_SESSION["description"] = $user[0]["description"];
      $_SESSION["image"]       = $user[0]["image"];
	  
	  $stmt2 = $this->connect()->prepare('update users set loggedIn = loggedIn + 1 where id = ?');
      $stmt2->execute(array( $_SESSION["userId"] ));
	  $stmt2 = null;
     }

    $stmt = null;
  }

}

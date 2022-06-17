<?php

class Newsletter extends Database {

  public function uploadEmail($email) {
    $stmt = $this->connect()->prepare('INSERT INTO newsletter (email) VALUES (?)');
    
    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header("location: ../contact-us.php?error=alreadyExists");
      exit();
    }
    else {
      header("location: ../contact-us.php?error=none");
      exit();
    }

    $stmt = null;
  }
}

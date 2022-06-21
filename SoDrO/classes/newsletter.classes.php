<?php

class Newsletter extends Database {

  public function uploadEmail($email) {
    $stmt = $this->connect()->prepare('INSERT INTO newsletter (email) VALUES (?)');

    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header("location: ../contact-us.php?error=alreadyExists#newsletterHref");
      exit();
    }
    else {
      header("location: ../contact-us.php?error=none#newsletterHref");
      exit();
    }

    $stmt = null;
  }
}

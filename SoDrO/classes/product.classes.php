<?php

class Product extends Database{

  public function getAllProducts(){
        $stmt = $this->connect()->prepare('select * from products;');

        if (!$stmt->execute(array($email))) {
              $stmt = null;
              header("location: ../index.php?error=smtFailed");
              exit();
         }
        else {
          $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
          return $product;
          header("location: ../contact-us.php?error=none");
          exit();
       }
  }
}
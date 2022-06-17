<?php

class Profile extends Database {
  public function updateProfile($email, $username,$fullname,$userId){

    if($email != $_SESSION['email'] && $email !=""){
        $stmt = $this->connect()->prepare('update users set email = ? where id = ? ');
        $stmt->execute(array($email,$userId)); 
        $_SESSION["email"]    = $email;
    }

    if($username != $_SESSION['username'] && $username !=""){
        $stmt = $this->connect()->prepare('update users set username = ? where id = ? ');
        $stmt->execute(array($username,$userId)); 
         $_SESSION["username"]    = $username;
    }

    if($fullname != $_SESSION['fullname'] && $fullname !=""){
        $stmt = $this->connect()->prepare('update users set fullname = ? where id = ? ');
        $stmt->execute(array($fullname,$userId)); 
        $_SESSION["fullname"]    = $fullname;
    }
}

public function updateDescription($description,$userId){
     if($description != $_SESSION['description'] && $description !=""){
        $stmt = $this->connect()->prepare('update users set description = ? where id = ? ');
        $stmt->execute(array($description,$userId)); 
        $_SESSION["description"]    = $description;
    }
}

public function updatePassword($password,$userId){
    if($password != $_SESSION['password'] && $password !=""){
        $stmt = $this->connect()->prepare('update users set password = ? where id = ? ');
        $stmt->execute(array($password,$userId)); 
        $_SESSION["password"]    = $password;
}
}
}



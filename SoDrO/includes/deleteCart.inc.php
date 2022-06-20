<?php
  session_start();
  require("../database_con.php");

  $deleteItem = htmlspecialchars($_GET['deleteItem']);
  if(isset($deleteItem) && $deleteItem!='') {
    $stmt = $conn->prepare("DELETE FROM wishlist WHERE userId = ? AND productId = ? ");

    $userId = htmlspecialchars($_SESSION['userId']);
    $deleteItem = htmlspecialchars($_GET['deleteItem']);

    $stmt->bind_param('ii',$userId, $deleteItem); /*ii vine de la tipurile parametrilor (integer = i, string = s, float/double = d)*/
    $stmt->execute();
    header('location:../shopping-list.php');
  }
  /**/
 ?>

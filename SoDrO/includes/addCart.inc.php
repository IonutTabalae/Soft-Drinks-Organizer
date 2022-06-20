<?php
session_start();
$productId1  = $_SESSION['productId'];
if(isset($_POST["addToCart"]) && isset($_SESSION['userId'])){

$userId      = $_SESSION['userId'];
require("../database_con.php");

$sql = "SELECT * FROM wishlist WHERE userId = $userId AND productId = $productId1";
$result = mysqli_query($conn, $sql);
$repeat = mysqli_fetch_all($result, MYSQLI_ASSOC);
if(empty($repeat) && $_SESSION['userId']!="") {
  $sql = "insert into wishlist (userId,productId) values (" .$userId . ','. $productId1.')';
  mysqli_query($conn, $sql);
  header("Location:../product-page.php?id=$productId1&add=succes");
}
else if (!empty($repeat) && isset($_SESSION['userId'])) {
  header("Location:../product-page.php?id=$productId1&add=alreadyExists");
}
unset($_SESSION['productId']);
exit();
}
else {
  header("Location:../product-page.php?id=$productId1");
}
?>

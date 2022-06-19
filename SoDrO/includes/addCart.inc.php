<?php
session_start();
if(isset($_POST["addToCart"])){

$productId1  = $_SESSION['productId'];
$userId      = $_SESSION['userId'];
require("../database_con.php");
$sql = "insert into wishlist (userId,productId) values (" .$userId . ','. $productId1.')';
mysqli_query($conn, $sql);

header("Location:http://localhost/SoDrO/product-page.php?id=$productId1&add=succes");
exit();
}
?>
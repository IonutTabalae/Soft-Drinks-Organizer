<?php


if(isset($_POST['deleteProduct'])){
require("../database_con.php");
$productId  = $_POST["productId"];
$sql    = "delete from products where id = " .$productId;
$result = mysqli_query($conn, $sql);
header("location:../index.php?result=deleteProductSuccesfully#deleteProduct");
exit();
}

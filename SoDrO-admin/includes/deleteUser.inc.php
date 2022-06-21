<?php


if(isset($_POST['deleteAcc'])){
require("../database_con.php");
$userId  = $_POST["userId"];
$sql    = "delete from users where id = " .$userId;
$result = mysqli_query($conn, $sql);
header("location:../index.php?result=deleteAccSuccesfully");
exit();
}

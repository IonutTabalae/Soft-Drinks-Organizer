<?php


if(isset($_POST['unsubscribe'])){
require("../database_con.php");
$email  = $_POST["emailNewsletter"];
$sql    = "delete from newsletter where email = " . "'" .$email ."'";
$result = mysqli_query($conn, $sql);
echo $sql;
header("location:../index.php?result=unsubscribedSuccesfully");
exit();
}

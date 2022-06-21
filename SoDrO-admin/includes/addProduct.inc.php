<?php



require("../database_con.php");


$name = $_POST["name"];
$category = $_POST['category'];
$size = $_POST['size'];
$calories = $_POST['calories'];
;

$sql    = "insert into products (name,size,category,calories) values ( " . "'".$name."'" ."," 
. "'".$size ."'". "," . "'".$category."'" ."," .$calories . ")";


 $result = mysqli_query($conn, $sql);

if($result > 0){
  echo "Insert succesfully!";
}




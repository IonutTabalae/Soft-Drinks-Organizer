<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping List</title>
	<link rel="stylesheet" href="./assets/css/header.css">
	<link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="css/about-us.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="./javascriptFiles/support.js"></script>
</head>

<body>
<?php include "./assets/header.php" ?>
<div class="middle-container">
<?php
require("database_con.php");
    $userId      = $_SESSION['userId'];
    $sql         = 'SELECT * FROM wishlist where userId = ' .$userId;
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class="middle-container">
    <?php foreach($products as $item): ?>
      <?php echo $item["productId"];?>
    <?php endforeach; ?>
</div>
<?php include "./assets/footer.php" ?>
</body>

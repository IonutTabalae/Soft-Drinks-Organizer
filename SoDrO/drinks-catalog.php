<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drinks Catalog</title>
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="css/drinks-catalog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="./javascriptFiles/support.js"></script>
  </head>
  <body>
    <?php require("database_con.php");?>
    <?php
      $sql = 'SELECT * FROM products ORDER BY id DESC';
      $result = mysqli_query($conn, $sql);
      $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      shuffle($products);
     ?>


    <?php include "./assets/header.php" ?>
    <div class="middle-container">
    <h1>Drinks Catalog</h1>
    <?php if(empty($products)): ?>
      <p class="idk momentan">There are no products in db.</p>
    <?php endif; ?>

    <?php foreach($products as $item): ?>
      <a style="all: unset; cursor: pointer;"href="product-page.php?id=<?php echo $item['id'] ?>">
      <div class="product-card">
        <div class="column">
          <img src="images/products/<?php echo $item['id'] ?>.png" alt="drink-image">
        </div>
        <div class="column">
          <h2><?php echo $item['name'] . ' - ' . $item['size']; ?></h2>
          <p><?php echo $item['ingredients'] ?></p>
          <!--TODO Mai modific design ul umpic si vad ce mai adaug-->
        </div>
      </div>
      </a>
    <?php endforeach; ?>
    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

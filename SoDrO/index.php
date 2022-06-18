<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soft Drinks Organizer</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  </head>
  <body>
    <?php include "./assets/header.php" ?>
    <div class="middle-container">
      <h1>Homepage</h1>
      <?php
        require("database_con.php");
        $sql    = 'SELECT  * FROM products ORDER BY views desc limit 5';
        $result = mysqli_query($conn, $sql);
        $topProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);
      ?>
      <
      <?php foreach($topProducts as $item): ?>
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
      <p style="text-align: center; padding: 30px;">TODO: adaugat produse recomandate</p>
      <div class="rss">
        <h2>Fresh Beverages Feed</h2>
        <?php include "./assets/rss2html.php" ?>
      </div>
    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

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
      <?php
        require("database_con.php");
        $sql    = 'SELECT id, name FROM products ORDER BY views desc limit 3';
        $result = mysqli_query($conn, $sql);
        $topProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);
      ?>
      <div class="recomandate">
        <?php $count = 0; foreach($topProducts as $item): $count += 1?>
          <div class="product">
            <a style="all: inherit; cursor: pointer;"href="product-page.php?id=<?php echo $item['id'] ?>">
            <div class="row">
              <div class="column">

                <p><span id="tag">🔥 Most popular choices #<?php echo $count ?></span></p>
                <h1><?php echo $item["name"] ?></h1>
                <p>Psst! Want to know a secret?</p>
                <br>
                <p>Don't tell anyone but these drinks are kinda trending around here.</p>

              </div>
              <div class="column">
                <img src="images/products/<?php echo $item['id'] ?>.png" alt="">
              </div>
              </div>
              </a>
          </div>
        <?php endforeach;?>
      </div>

      <div class="rss">
        <h2>Fresh Beverages Feed</h2>
        <?php include "./assets/rss2html.php" ?>
      </div>

    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

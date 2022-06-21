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
            <a style="all: inherit; cursor: pointer;" href="product-page.php?id=<?php echo $item['id'] ?>">
            <div class="row">
              <div class="column">

                <p><span class="tag">🔥 Most popular choices #<?php echo $count ?></span></p>
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
      <h2 style="font-weight: 600; font-size: 48px;line-height: 58px; letter-spacing: -0.04em; margin-top:90px; margin-bottom:40px; margin-left: 2%;">Categories</h2>
      <div class="categories">
        <div class="category"><a style="all: inherit; cursor: pointer;" href="drinks-catalog.php?category=carbonated-drink">
          <img src="images/categories/carbonated-drink.png" alt="carbonated-drink-img">
          <p>Carbonated Drinks</p>
        </a></div>
        <div class="category"><a style="all: inherit; cursor: pointer;" href="drinks-catalog.php?category=non-carbonated-drink">
          <img src="images/categories/non-carbonated-drink.png" alt="non-carbonated-drink-img">
          <p>Non-carbonated</p>
        </a></div>
        <div class="category"><a style="all: inherit; cursor: pointer;" href="drinks-catalog.php?category=coffee">
          <img src="images/categories/coffee.png" alt="coffee-img">
          <p style="line-height:5px;">Coffee Drinks</p>
        </a></div>
        <div class="category"><a style="all: inherit; cursor: pointer;" href="drinks-catalog.php?category=tea">
          <img src="images/categories/tea.png" alt="tea-img">
          <p style="line-height: 10px">Tea</p>
        </a></div>
        <div class="category"><a style="all: inherit; cursor: pointer;" href="drinks-catalog.php?category=plant-milk">
          <img src="images/categories/plant-milk.png" alt="plant--img">
          <p style="line-height: 5px;">Plant dairy</p>
        </a></div>
        <div class="category"><a style="all: inherit; cursor: pointer;" href="drinks-catalog.php?category=energy-drink">
          <img src="images/categories/energy-drink.png" alt="energy-img">
          <p>Energy Drink</p>
        </a></div>
      </div>

      <div class="rss">
        <h2>Fresh Beverages News</h2>
        <?php include "./assets/rss2html.php" ?>
        <a href="https://www.beveragedaily.com/Info/BeverageDaily-RSS" style="float:right;">News taken from BeverageDaily website RSS.</a>
      </div>

    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

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
      if(isset($_GET['search'])) {
        /*pentru a lua doar primele 400 caractere din descriere*/
        $sql = "SELECT id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber, protein, salt,
        food_group, nutrigrade, link FROM products WHERE lower(name) LIKE '%" .$_GET['search'] . "%'";

        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
      else {

        $sql = 'SELECT id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber protein, salt,
        food_group, nutrigrade, link FROM products ORDER BY id DESC';

        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
        shuffle($products);
      }
     ?>
    <?php include "./includes/filters.inc.php" ?>
    <?php include "./assets/header.php" ?>
    <div class="middle-container">
    <h1>Drinks Catalog</h1>
    <div class="search-bar">
      <form class="search-bar" action="drinks-catalog.php" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <button type="submit"  class="btn" >⌕</button>
      </form>
    </div>
    <?php if(empty($products)): ?>
      <h2 class="idk momentan" style="color: #FF7426; margin-top: 100px;">no such drink yet...</h2>
      <a href="contact-us.php#newsletterHref"<p style="color: #FF7426; margin-bottom: 100px;">You can still subscribe to our newsletter to get the latest news about our page.</p></a>
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
          <p style="font-style: italic;">Brand: <?php if($item['brand']=='') echo "-"; else echo $item['brand']; ?></p>
          <p style="font-style: italic; text-align: center;">Allergens: <?php if($item['allergens']=='') echo "-"; else echo $item['allergens']; ?></p>
          <img src="images/nutriscore/<?php if($item['nutrigrade']=='') echo 'non'; else echo $item['nutrigrade']; ?>.svg" alt="">
        </div>
      </div>
      </a>
    <?php endforeach; ?>
    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

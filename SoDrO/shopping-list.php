<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping List</title>
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
  <?php include "./assets/header.php" ?>

  <div class="middle-container">

    <?php
        require("database_con.php");
        $userId      = $_SESSION['userId'];
        $sql         = 'SELECT * FROM wishlist where userId = ' .$userId;
        $result = mysqli_query($conn, $sql);
        $wishlist = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

        <?php foreach($wishlist as $item): ?>
          <?php
            $sql = 'SELECT * FROM products where id = ' .$item['productId'];
            $result = mysqli_query($conn, $sql);
            $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
           ?>
           <a style="all: unset; cursor: pointer;"href="product-page.php?id=<?php echo $product[0]['id'] ?>">
           <div class="product-card">
             <div class="column">
               <img src="images/products/<?php echo $product[0]['id'] ?>.png" alt="drink-image">
             </div>
             <div class="column">
               <h2><?php echo $product[0]['name'] . ' - ' . $product[0]['size']; ?></h2>
               <p><?php echo $product[0]['ingredients'] ?></p>
               <p style="font-style: italic;">Brand: <?php if($product[0]['brand']=='') echo "-"; else echo $product[0]['brand']; ?></p>
               <p style="font-style: italic; text-align: center;">Allergens: <?php if($product[0]['allergens']=='') echo "-"; else echo $product[0]['allergens']; ?></p>
               <img src="images/nutriscore/<?php if($product[0]['nutrigrade']=='') echo 'non'; else echo $product[0]['nutrigrade']; ?>.svg" alt="">
             </div>
           </div>
           </a>
        <?php endforeach; unset($product); ?>
    </div>
  <?php include "./assets/footer.php" ?>
</body>

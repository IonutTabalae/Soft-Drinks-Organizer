<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping List</title>
	<link rel="stylesheet" href="./assets/css/header.css">
	<link rel="stylesheet" href="./assets/css/footer.css">
  <link rel="stylesheet" href="css/shopping-list.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="./javascriptFiles/support.js"></script>
</head>

<body>
  <?php include "./assets/header.php" ?>

  <div class="middle-container">
    <h1>Your shopping list, <?php echo $_SESSION['username'] ?></h1>
    <?php
        require("database_con.php");
        $userId      = $_SESSION['userId'];
        $sql         = 'SELECT * FROM wishlist where userId = ' .$userId;
        $result = mysqli_query($conn, $sql);
        $wishlist = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

        <?php $numberOfDrinks = 0; $totalCalories = 0; $totalSugar = 0; $totalAllergens =''; foreach($wishlist as $item): $numberOfDrinks += 1;?>
          <?php
            $sql = 'SELECT id, name, size, countries, brand, category, LEFT (ingredients, 300) AS ingredients, allergens, calories, fat, carbs, sugar, fiber, protein, salt,
            food_group, nutrigrade, link FROM products where id = ' .$item['productId'];
            $result = mysqli_query($conn, $sql);
            $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
           ?>

           <div class="product-card"> <a style="all: unset; cursor: pointer;"href="product-page.php?id=<?php echo $product[0]['id'] ?>">
             <div class="column">
               <img src="images/products/<?php echo $product[0]['id'] ?>.png" alt="drink-image">
             </div>
             <div class="column">
               <h2><?php echo $product[0]['name'] . ' - ' . $product[0]['size']; ?></h2>
               <p><?php echo $product[0]['ingredients'] ?></p>
               <p style="font-style: italic; margin-top:10px;">Brand: <strong> <?php if($product[0]['brand']=='') echo "-"; else echo $product[0]['brand']; ?></strong></p>
               <p>Countries: <strong> <?php if($product[0]['countries']=='') echo "-"; else echo $product[0]['countries']; ?></strong></p>
               <p style="font-style: italic; text-align: center;">Allergens: <?php if($product[0]['allergens']=='') echo "-"; else echo $product[0]['allergens']; ?></p>
               <p style="font-style: italic; text-align: center;">Calories: <?php if($product[0]['calories']=='0') echo "-"; else echo $product[0]['calories'] .' kcal'; ?></p>
               <p style="font-style: italic; text-align: center;">Sugar: <?php if($product[0]['sugar']=='0') echo "-"; else echo $product[0]['sugar'].' g'; ?></p>
               <?php $totalCalories += $product[0]['calories'] ?>
               <?php $totalSugar += $product[0]['sugar'] ?>
               <?php if($product[0]['allergens']!='' && $product[0]['allergens']!=' ') $totalAllergens .= ' '.$product[0]['allergens']; ?>
             </div>
             <a class="delete-button"href="includes/deleteCart.inc.php?deleteItem=<?php echo $product[0]['id'] ?>" style="float:right; float: bottom;">✖</a>
           </a></div>
        <?php endforeach; unset($product); ?>
        <hr style="margin-top: 100px;">
        <div class="stats-for-nerds">
          <h2>Stats for Nerds:</h2>
          <h3>Number of drinks: <?php echo $numberOfDrinks."." ?></h3>
          <h3>Total calories: <?php echo (int)$totalCalories." kcal." ?></h3>
          <h3>Average calories per serving: <?php if($numberOfDrinks != 0) echo (int)($totalCalories/$numberOfDrinks)." kcal." ?></h3>
          <h3>Total sugar: <?php echo (int)$totalSugar." g (daily limit is 36g)." ?></h3>
          <h3>Allergens: <?php echo $totalAllergens."." ?></h3>
        </div>
    </div>
  <?php include "./assets/footer.php" ?>
</body>
</html>

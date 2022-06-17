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
    <h1>Homepage</h1>
    <p>
    <?php
    include "./classes/product.classes.php";
    $product      = new Product();
    $listProducts = $product->getAllProducts();
    
    echo($listProducts);
    ?>
    </p>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

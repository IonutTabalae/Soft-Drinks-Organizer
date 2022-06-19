<?php
  if(isset($_GET["id"])){
    if($_GET["id"]!=""){
      $productId = $_GET["id"];

      require("database_con.php");
      $sql         = 'SELECT * FROM products where products.id = ' .$productId;
      $result      = mysqli_query($conn, $sql);
      $product     = $result->fetch_assoc();

      $sql         = 'update products set views = views + 1 where id = '.$productId;
      $result1     = mysqli_query($conn,$sql);
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name'] ?></title>
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="css/product-page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="./javascriptFiles/support.js"></script>
    <title></title>
  </head>
  <body>
    <?php include "./assets/header.php" ?>

    <div class="middle-container">
      <h1><?php echo $product['name'] ?> - <?php echo $product['size'] ?></h1>
      <div class="row">
        <div class="column">
          <img src="images\products\<?php echo $product["id"] ?>.png" alt="drink-image">
                <p>Categories: <?php echo $product["category"] ?>, <?php echo $product["food_group"] ?></p>
        </div>
        <div class="column">
          <button onclick="window.print()" class="print" type="button" name="button">🖨️</button>
          <button onclick="window.location.href='assets/productData.php?productId=<?php echo $product['id'] ?>'" class="csv" type="button" name="button">📋</button>
          <div class="nutrition-div">
            <h2>Nutrition Information</h2>
            <p>Calories <?php echo $product["calories"] ?>kcal</p>
            <p>Fat <?php echo $product["fat"] ?>g</p>
            <p>Carbohydrate <?php echo $product["carbs"] ?>g</p>
            <p>Fiber <?php echo $product["fiber"] ?>g</p>
            <p>Sugar <?php echo $product["sugar"] ?>g</p>
            <p>Salt <?php echo $product["salt"] ?>g</p>
            <p>Protein <?php echo $product["protein"] ?>g</p>
            <p class="MessageAfterAddProduct" style="border: none; text-align-last: center; position: absolute; margin-left: auto; margin-right: auto; left: 0; right: 0;"></p>

            <form action="./includes/addCart.inc.php" method=POST>
              <button type="submit" name="addToCart">Add to Shopping List</button>
            </form>
            <p id="disclaimer">The nutritional information are for 1 portion.</p>
          </div>
        </div>
      </div>
      <div class="content">
        <h2>Ingredients:</h2>
        <p><?php echo $product["ingredients"] ?></p>
      </div>
      <?php if($product["allergens"]!="") { ?>
        <div class="content">
          <p style="font-style: italic;">Allergens: <?php echo $product["allergens"] ?></p>
        </div>
      <?php } ?>
      <?php if($product["countries"]!="") { ?>
        <div class="content">
          <h2>Countries where sold:</h2>
          <p><?php echo $product["manufacturing_places"] ?></p>
        </div>
      <?php } ?>
      <?php if($product["stores"]!="") { ?>
        <div class="content">
          <h2>Stores where sold:</h2>
          <p><?php echo $product["stores"] ?></p>
        </div>
      <?php } ?>
      <?php if($product["manufacturing_places"]!="") { ?>
        <div class="content">
          <h2>Manufacturing places:</h2>
          <p><?php echo $product["manufacturing_places"] ?></p>
        </div>
      <?php } ?>
      <?php if($product["nutrigrade"]=="") { ?>
        <div class="content">
          <img src="images/nutriscore/non.svg" alt="nutriscore-non">
        </div>
      <?php } else {?>
        <div class="content">
          <img src="images/nutriscore/<?php echo $product["nutrigrade"] ?>.svg" alt="nutriscore-non">
        </div>
        <?php } ?>
    </div>
    <?php include "./assets/footer.php" ?>
    <?php
        $_SESSION["productId"] = $productId;
        if(isset($_GET["add"])){
        if($_GET["add"]=="succes"){
          echo '<script>', 'putMessageAfterAddProduct("Product added successfully to cart!");', '</script>';
        }
      }
    ?>
  </body>
</html>

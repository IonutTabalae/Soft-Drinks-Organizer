<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title><!--TODO de pus numele produsului -->
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="css/product-page.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <title></title>
  </head>
  <body>
<?php
      if(isset($_GET["id"])){
        if($_GET["id"]!=""){
          $productId = $_GET["id"];

          require("database_con.php");
          $sql         = 'SELECT * FROM products where products.id = ' .$productId;
          $result      = mysqli_query($conn, $sql);
          $infoProduct = $result->fetch_assoc();


          $sql1         = 'SELECT name from categories where categories.id = '               .$infoProduct["category_id"];
          $result1      = mysqli_query($conn,$sql1);
          $categoryName = $result1->fetch_assoc();
          
        }
      }
?>
  
    <?php include "./assets/header.php" ?>
    <div class="middle-container">
      <h1>
        <?php echo $infoProduct['name'] . ' - ' . $infoProduct['size']; ?>
      </h1>
      <div class="row">
        <div class="column">
          <img src="images/products/<?php echo $infoProduct['id'] ?>.png">
                <p>
                  Categories: <?php echo $categoryName["name"];  ?>
                 </p> 
        </div>
        <div class="column">
          <div class="nutrition-div">
            <h2>Nutrition Information</h2>
            <p>
              <?php echo 'Calories' . " ". $infoProduct['calories'] . 'kcal' ?>
            </p> <!--bold-->
            <p>
              <?php echo 'Fat' . " ". $infoProduct['fat'] . 'g' ?>
            </p> <!--bold-->
            <p>
              <?php echo 'Carbohydrate' . " ". $infoProduct['carbs'] . 'g' ?>
            </p> <!--bold-->
            <p>
               <?php echo 'Fiber' . " ". $infoProduct['fiber'] . 'g' ?>
            </p> <!--bold-->
            <p>
               <?php echo 'Salt' . " ". $infoProduct['salt'] . 'g' ?>
            </p> <!--bold-->
            <!--TODO loc pentru mesaj de : Product successfully added to your shopping list!-->
            <!--<h5>Product successfully added to your shopping list!</h5>-->
            <button type="button" name="addToCart">Add to Shopping List</button>
            <p id="disclaimer">The nutritional information are for 1 portion.</p>
          </div>
        </div>
      </div>
      <div class="content">
        <h2>Ingredients:</h2>
        <p>
          <?php echo $infoProduct['ingredients'] ?>
        </p>
        
      </div>
      <div class="content">
        <h2>Countries where sold:</h2>
        <p>
          <?php echo $infoProduct['countries'] ?>
        </p>
        <!--TODO de pus idk orice content in plus ca parea cam goala pagina-->
      </div>
    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

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
    <?php include "./assets/header.php" ?>
    <div class="middle-container">
      <h1>Starbucks Cappuccino - 220 ml</h1><!--TODO de pus numele produsului + size-->
      <div class="row">
        <div class="column">
          <img src="images\products\starbucks-220ml.png" alt="product-image"><!--TODO de inlocuit imaginea cu imaginea produsului specific-->
                <p>Categories: Beverages, Dairies, Dairy drinks, Flavoured milks, Chocolate milks</p> <!--TODO de inlocuit cu categoria specifica-->
        </div>
        <div class="column">
          <div class="nutrition-div">
            <h2>Nutrition Information</h2>
            <p>Calories 69kcal</p> <!--TODO de schimbat valoare + bold-->
            <p>Fat 2.5g</p> <!--TODO de schimbat valoare + bold-->
            <p>Carbohydrate 8.8g</p> <!--TODO de schimbat valoare + bold-->
            <p>Fiber 0g</p> <!--TODO de schimbat valoare + bold-->
            <p>Salt 0.08g</p> <!--TODO de schimbat valoare + bold-->
            <!--TODO loc pentru mesaj de : Product successfully added to your shopping list!-->
            <!--<h5>Product successfully added to your shopping list!</h5>-->
            <button type="button" name="addToCart">Add to Shopping List</button>
            <p id="disclaimer">The nutritional information are for 1 portion.</p>
          </div>
        </div>
      </div>
      <div class="content">
        <h2>Ingredients:</h2>
        <p>lait (contient 3,0% de matières grasses) 75%, café arabica Starbucks® (eau, extrait de café) 19,8%, sucre, cacao maigre en poudre 0,1%, correcteur d'acidité (carbonates de potassium), stabilisants (carraghénanes, gomme guar), émulsifiants (mono - et diglycérides d'acides gras d'origine végétale), arôme naturel, arôme.</p>
        <!--TODO de pus ingredientele fiecarui produs-->
      </div>
      <div class="content">
        <h2>Countries where sold:</h2>
        <p>Belgium, France, Luxembourg, Spain</p><!--TODO de pus idk orice content in plus ca parea cam goala pagina-->
      </div>
    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

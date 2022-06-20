<?php

if($_POST['min-calories']==null) {
  $minCalories = 0;
}
else {
  $minCalories = $_POST['min-calories'];
}
if($_POST['max-calories']==null) {
  $maxCalories = 999;
}
else {
  $maxCalories = $_POST['max-calories'];
}


if($_POST['min-sugar']==null) {
  $minSugar = 0;
}
else {
  $minSugar = $_POST['min-sugar'];
}
if($_POST['max-sugar']==null) {
  $maxSugar = 999;
}
else {
  $maxSugar = $_POST['max-sugar'];
}


if($_POST['min-carbs']==null) {
  $minCarbs = 0;
}
else {
  $minCarbs = $_POST['min-carbs'];
}
if($_POST['max-carbs']==null) {
  $maxCarbs = 999;
}
else {
  $maxCarbs = $_POST['max-carbs'];
}


if($_POST['min-protein']==null) {
  $minProtein = 0;
}
else {
  $minProtein = $_POST['min-protein'];
}
if($_POST['max-protein']==null) {
  $maxProtein = 999;
}
else {
  $maxProtein = $_POST['max-protein'];
}
if(isset($_GET['category'])) {
  $category = htmlspecialchars(trim($_GET['category']));
  if($_POST['allergens']=='none') {
    $sql = "SELECT id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber, protein, salt,
    food_group, nutrigrade, link FROM products WHERE calories >= $minCalories AND calories <= $maxCalories AND sugar >= $minSugar AND sugar <= $maxSugar AND carbs >= $minCarbs AND carbs <= $maxCarbs AND protein >= $minProtein AND protein <= $maxProtein AND allergens = '' AND category = '$category'";
  }
  else {
    $allergens = $_POST['allergens'];
    $sql = "SELECT id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber, protein, salt,
    food_group, nutrigrade, link FROM products WHERE calories >= $minCalories AND calories <= $maxCalories AND sugar >= $minSugar AND sugar <= $maxSugar AND carbs >= $minCarbs AND carbs <= $maxCarbs AND protein >= $minProtein AND protein <= $maxProtein AND category = '$category' AND allergens like '%" .$allergens . "%'";
  }
} else {
  if($_POST['allergens']=='none') {
    $sql = "SELECT id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber, protein, salt,
    food_group, nutrigrade, link FROM products WHERE calories >= $minCalories AND calories <= $maxCalories AND sugar >= $minSugar AND sugar <= $maxSugar AND carbs >= $minCarbs AND carbs <= $maxCarbs AND protein >= $minProtein AND protein <= $maxProtein AND allergens = ''";
  }
  else {
    $allergens = $_POST['allergens'];
    $sql = "SELECT id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber, protein, salt,
    food_group, nutrigrade, link FROM products WHERE calories >= $minCalories AND calories <= $maxCalories AND sugar >= $minSugar AND sugar <= $maxSugar AND carbs >= $minCarbs AND carbs <= $maxCarbs AND protein >= $minProtein AND protein <= $maxProtein AND allergens like '%" .$allergens . "%'";
  }
}

$result = mysqli_query($conn, $sql);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php

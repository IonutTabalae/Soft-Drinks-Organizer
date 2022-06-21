<?php
if(isset($_GET['category'])){
        $sql = "select id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber protein, salt,
        food_group, nutrigrade, link from products where category like '". $_GET['category'] ."%'";
        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
      

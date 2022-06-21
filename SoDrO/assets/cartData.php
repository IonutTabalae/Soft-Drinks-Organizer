<?php
     session_start();
     $date = getdate();
     $today = $date['mday'].".".$date['mon'].".".$date['year'];
     require("../database_con.php");
     if(!isset($_SESSION['userId']))
       echo "eroare";

     $sql = 'SELECT p.name, p.size, p.brand, p.category, p.allergens, p.calories, p.fat, p.carbs, p.sugar, p.fiber, p.protein, p.salt, p.food_group, p.nutrigrade FROM wishlist w JOIN products p ON p.id = productId WHERE userId ='.$_SESSION['userId'];
     $result = mysqli_query($conn, $sql);
     $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

     $filename = $_SESSION['username'].'__Shopping_List['.$today.'].csv';
     header("Content-type: text/csv");
     header("Content-Disposition: attachment; filename=$filename");

     $output = fopen("php://output", "w");
     fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

     $header = array_keys($products[0]);
     fputcsv($output, $header);
     foreach($products as $row)
     {
          fputcsv($output, $row);
     }


     fputcsv($output, ['']);
     fputcsv($output, ['']);
     fputcsv($output, ['']);
     fputcsv($output, ['Stats for nerds:']);
     $numberOfDrinks = sizeof($products);
     $totalCalories = array_sum(array_column($products,'calories'));
     if($numberOfDrinks!=0)
        $avgCalories = $totalCalories/$numberOfDrinks;
     else {
       $avgCalories = 0;
     }
     $totalSugar = array_sum(array_column($products,'sugar'));
     $totalCarbs = array_sum(array_column($products,'carbs'));
     $totalFat = array_sum(array_column($products,'fat'));
     $totalProtein = array_sum(array_column($products,'protein'));
     $totalSalt = array_sum(array_column($products,'salt'));
     $totalAllergens = array_column($products,'allergens');

     fputcsv($output, ["Number of drinks: "," $numberOfDrinks"]);
     fputcsv($output, ["Total calories: "," $totalCalories"," kcal"]);
     fputcsv($output, ["Average calories per serving: "," $avgCalories"," kcal"]);
     fputcsv($output, ["Total sugar: "," $totalSugar"," g", "(daily limit is 36g)"]);
     fputcsv($output, ["Total carbs: "," $totalCarbs"," g"]);
     fputcsv($output, ["Total carbs: "," $totalCarbs"," g"]);
     fputcsv($output, ["Total fats: "," $totalFat"," g"]);
     fputcsv($output, ["Total protein: "," $totalProtein"," g"]);
     fputcsv($output, ['']);
     fputcsv($output, ['']);
     fputcsv($output, ["Total allergens:"]);
     fputcsv($output, $totalAllergens);
     fclose($output);
?>

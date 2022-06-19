
 <?php
if(isset($_GET['category'])){
        $url = basename($_SERVER['REQUEST_URI']);
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $category = $params["category"];
        $sql = "select id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber protein, salt,
        food_group, nutrigrade, link from products where category like '%". $category ."%'";
        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
      if(isset($_GET['filterSizeMin'])){
        $url = basename($_SERVER['REQUEST_URI']);
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $sizeMinim = $params["filterSizeMin"];
        $sizeMaxim = $params["filterSizeMax"];
        $sql = "select id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber protein, salt,
        food_group, nutrigrade, link from products where size >=" . $sizeMinim ."
                 and  size <=" . $sizeMaxim;
        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
      if(isset($_GET['sugarQuantityMin'])){
        $url = basename($_SERVER['REQUEST_URI']);
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $sugarMinim = $params["sugarQuantityMin"];
        $sugarMaxim = $params["sugarQuantityMax"];
        $sql = "select id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber protein, salt,
        food_group, nutrigrade, link from products where sugar >=" . $sugarMinim ."
                 and  sugar <=" . $sugarMaxim;
        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }
      if(isset($_GET['sugarQuantityMin'])){
        $url = basename($_SERVER['REQUEST_URI']);
        $url_components = parse_url($url);
        parse_str($url_components['query'], $params);
        $sugarMinim = $params["sugarQuantityMin"];
        $sugarMaxim = $params["sugarQuantityMax"];
        $sql = "select id, name, size, brand, category, LEFT (ingredients, 400) AS ingredients, allergens, calories, fat, carbs, sugar, fiber protein, salt,
        food_group, nutrigrade, link from products where sugar >=" . $sugarMinim ."
                 and  sugar <=" . $sugarMaxim;
        $result = mysqli_query($conn, $sql);
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
      }

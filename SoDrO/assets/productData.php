<?php
      require("../database_con.php");
      if(!isset($_GET['productId']))
        echo "eroare";
      $productId = $_GET['productId'];

      $sql         = 'SELECT * FROM products where products.id = ' .$productId;
      $result      = mysqli_query($conn, $sql);
      $product     = $result->fetch_assoc();

      $filename = $product['name'].'__Data'.'.csv';
      header("Content-type: text/csv");
      header("Content-Disposition: attachment; filename=$filename");
      $product = array_map("utf8_decode", $product);
      $output = fopen("php://output", "w");
      $header = array_keys($product);
      fputcsv($output, $header);
      fputcsv($output, array_values($product));
      /*
      foreach($results as $row)
      {
           fputcsv($output, $row);
      }
      */
      fclose($output);
 ?>

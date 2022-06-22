<?php
require ("database_con.php");
$sql = 'select name,views from products order by views desc limit 10';
$result = mysqli_query($conn, $sql);
$topProducts = mysqli_fetch_all($result, MYSQLI_ASSOC);

$dataProducts = array();
$labelProducts = array();

foreach($topProducts as $product):
  array_push($dataProducts,$product["views"]);
  array_push($labelProducts,$product["name"]);
endforeach;



$sql1 = 'select username,loggedIn from users order by loggedIn desc limit 10';
$result1 = mysqli_query($conn, $sql1);
$topUsers = mysqli_fetch_all($result1, MYSQLI_ASSOC);

$dataUsers = array();
$labelUsers = array();

foreach($topUsers as $user):
  array_push($dataUsers,$user["loggedIn"]);
  array_push($labelUsers,$user["username"]);
endforeach
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Statistics</title>
    <link rel="stylesheet" href="./css/statistics.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

  </head>
  <body>
    <?php include "./header-footer/header.php" ?>
    <div class="middle-container">
    <div class = "Products">
    <canvas id="bar-chart" width="800" height="450"></canvas>
    <script>
new Chart(document.getElementById("bar-chart"), {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($labelProducts); ?>,
    datasets: [
      {
        label: "Views",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850", "#f5a947", "#86d630", "#52f0da", "#a68eea", "#9b104d"],
        data: <?php echo json_encode($dataProducts); ?>
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Top 10 most viewed products'
    }
  }
});

  </script>
    </div>
<div class = "Users">
  <style>
  #bar-chart1 {
    display: inline-block;
    position: relative;
    width: 5%;
  }
</style>
    <canvas id="bar-chart1"></canvas>
<script>
new Chart(document.getElementById("bar-chart1"), {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($labelUsers); ?>,
    datasets: [
      {
        label: "Loggins",
        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
        data: <?php echo json_encode($dataUsers); ?>
      }
    ]
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: 'Top 10 most active users'
    }
  }
});

  </script>

</div>
  </div>
</body>
</html>

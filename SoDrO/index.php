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
    <div class="middle-container">
      <h1>Homepage</h1>
      <p style="text-align: center; padding: 30px;">TODO: adaugat produse recomandate</p>
      <div class="rss">
        <h2>Fresh Beverages Feed</h2>
        <?php include "./assets/rss2html.php" ?>
      </div>
    </div>
    <?php include "./assets/footer.php" ?>
  </body>
</html>

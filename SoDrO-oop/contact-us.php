<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="css/contact-us.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>

<body>
    <?php include "./assets/header.php" ?>

    <h1>Contact us</h1>
    <div class="middle-container">
        <form action="https://formsubmit.co/dce5420647126a7d028d9ed4314d8b2d" method="POST">
            <div class="container">
                <div class="box">
                  <p class="input-explanation">NAME</p>
                  <input type="text" name="name"  placeholder="Enter your name..." required>
                </div>
                <div class="box">
                  <p class="input-explanation">EMAIL ADDRESS</p>
                  <input type="email" name="email"  placeholder="Enter your email..." required>
                </div>
            </div>
            <div class="input-row">
              <div class="input-mid">
                <p class="input-explanation">SUBJECT</p>
                <input type="text" name="subject"  placeholder="Enter subject..." required>
              </div>
            </div>
            <div class="input-row">
              <div class="input-bot">
                <p class="input-explanation">MESSAGE</p>
                <input type="text" name="message"  placeholder="Enter your messages..." required>
              </div>
            </div>
                <input type="Submit" value="Submit" name = "Submit">
          </form>
        </div>
                <div class=" news-frame">
                <div class="news-info">
                    <h1>Weekly drink to your inbox</h1>
                    <p>Find out all the news about drinks now!</p>
                    <form>
                        <div class="input-row">
                            <input type="text" name="email" placeholder="Your email adress..." required>
                            <input type="Submit" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
    </div>
    <?php include "./assets/footer.php" ?>
</body>

</html>

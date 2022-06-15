<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Inter" rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</head>

<body>
    <header>
        <p class="logo">Soft<span style="color:#FF7426">Drinks</span>Organizer<span style="color:#FF7426">.</span></p>
        <nav>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="../about-us-page/index.php">About</a></li>
                <li><a class="active" href="">Contact </a></li>
            </ul>
        </nav>
        <?php
            if(isset($_SESSION["userId"]) ){
              echo "<a class='login' href='../../back/phpFiles/logout.php'>Log Out</a>";
              echo "<a class='login' href='../profile-page/index.php'>Profile</a>";
            }
            else{
              echo " <a class='login' href='../login-page/index.php'>Login/Register</a> ";
            }
            ?>
        <!-- <a class="login" href="../login-page/index.html">Login/Register</a> -->
    </header>

    <h1>Contact us</h1>
    <div class="middle-container">
        <form action="https://formsubmit.co/dce5420647126a7d028d9ed4314d8b2d" method="POST">
            <div class="input-row">
                <input type="text" name="name"  placeholder="Enter your name..." required>
                <input type="text" name="email"  placeholder="Your email adress..." required>
            </div>
            <div class="input-row">
                <input type="text" name="subject"  placeholder="Enter subject..." required>
            </div>
            <div class="input-row">
                <input type="text" name="message"  placeholder="Enter your messages..." required>
            </div>
            <div class="input-row">
                <input type="Submit" value="Submit" name = "Submit">
            </div>
        </form>

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
    <?php include '../assets/footer.php' ?>
</body>

</html>

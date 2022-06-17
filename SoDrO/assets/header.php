<?php session_start(); ?>
<header>
  <a href="index.php" style="text-decoration: none"><p class="logo">Soft<span style="color:#FF7426">Drinks</span>Organizer<span style="color:#FF7426">.</span></p></a>
  <nav>
    <ul class="nav-links">
      <?php
          if(isset($_SESSION["userId"]))
          {
      ?>
                <li><a href="about-us.php">About</a></li>
                <li><a href="contact-us.php">Contact</a></li>
                <li><a href="shopping-list.php" style="color:#FF7426">Shopping List</a></li>
              </ul>
            </nav>
            <div class="left-nav">
              <a id=user-nav href="profile.php"><?php echo $_SESSION["username"]; ?></a></li>
              <a class="login" href="./includes/logout.inc.php">Logout</a>
            </div>


      <?php
          }
          else
          {
      ?>
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About</a></li>
                <li><a href="contact-us.php">Contact</a></li>
              </ul>
            </nav>
            <a class="login" href="login.php">Login/Register</a>
      <?php
          }
      ?>
</header>

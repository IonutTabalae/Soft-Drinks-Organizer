<div class="container-news" id="newsletterHref">
		<h2 class="title">Newsletter</h2>
		<p>Subscribe to our newsletter for fresh news about us!</p>
		<form action="./includes/newsletter.inc.php" method="POST">
			<div class="inputBox">
				<input type="email" name="newsletterEmail" placeholder="Enter a valid Email." required>
				<button type="submit" name="submitNewsletter" class="btn" style="font-size: 22px;">></button>
			</div>
		</form>
		<div class = "MessageAfterNewsletter"></div>
		<?php
      if(isset($_GET["error"])){
				if($_GET["error"]=="none"){
					echo '<script>', 'putMessageAfterNewsletter("Subscribed to newsletter successfully!");', '</script>';
			}
			if(isset($_GET["error"])){
				if($_GET["error"]=="alreadyExists"){
					echo '<script>', 'putMessageAfterNewsletter("Email already subscribed!");', '</script>';
			}
		}
	}
		?>
</div>

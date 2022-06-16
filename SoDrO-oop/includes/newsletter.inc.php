<?php
session_start();

if(isset($_POST['submitNewsletter'])){

$email = $_POST["newsletterEmail"];

include "../classes/database.classes.php";
include "../classes/newsletter.classes.php";

$newsletter = new Newsletter();
$result = $newsletter -> uploadEmail($email);
header("location:../contact-us?error=success.php");
}

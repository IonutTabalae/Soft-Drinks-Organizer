<?php

//header for the database
include './database.php';
$database = new Database();
$db = $database->connect();

//check if username already exists in db
$typeAccount = "user";

$query = "select * from users  where username = '" . $_POST["username"] . "'";
$resultQuery      = mysqli_query($db,$query);
$numberRows = mysqli_num_rows($resultQuery); 
//error msg
$error = "";

//check if input for username is not empty
if (empty($_POST["username"])) {
    $error = "<p>Username required for creating an account!</p>";
} else {
    //check if the username already exists in db
    if ($numberRows != 0) {
        $error = "<p>Username taken :(</p>";
    }
}

//check if the email input is not empty
if (empty($_POST["email"])) {
    $error = "<p>Email required for creating an account!</p>";
} else {
    //check if the email input is a real email
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error .= "<p>Invalid email format</p>";
    }
}

//check if the password input is not empty
if (empty($_POST["password"]) || empty($_POST["confirm_password"])) {
    $error .= "<p>Password is required</p>";
} else {
    //check if the password is at least 10 characters/digits
    if (strlen($_POST['password']) < 10) {
        $error .= "<p>Password must be at least 10 characters.</p>";
    } else {
        //check if the password and the confimartion of the password match
        if ($_POST["password"] != $_POST["confirm_password"]) {
            $error .= "<p>Passwords dont't match</p>";
        }
    }
}

//if the error is empty, we can add it to the db
if (empty($error)) {
    $insertQuery = "insert into users(type,email,username,password) values ('" . $typeAccount . "','" . $_POST["email"] . "','" . $_POST["username"] . "','" . $_POST["password"] . "')";
    $loginStatement = $db->prepare($insertQuery);
    $loginStatement->execute();
    $mesaj = "Registration complete!Login now!";
    echo json_encode(['code' => 200, 'msg' => $mesaj]);
    exit();
}
echo json_encode(['code' => 200, 'msg' => $error]);

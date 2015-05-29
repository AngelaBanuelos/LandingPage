<?php

//requiring the config file
//this is going to be for creating a user
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../view/registerHeader.php");
require_once(__DIR__ . "/../view/created-user.php");
require_once(__DIR__ . "/../view/footer.php");
require_once(__DIR__ . "/../view/loginHeader.php");
//we are creating a variable named username
//were filtering an input and getting it from the post method
//sanitizing the input username by string 
//getting it by the name username
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
//we are creating a variable named password 
//were filtering an input and getting it from the post method
//getting it by the name password
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
//using $5$ 5000 times
//uniqid generates a random number
//this variable creates a hash so that passwords are unique and protected
$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";

//creating a query variable
//using the session because it has a connection and this connection is a connection to our databse
//we are querying
//were inserting in the users table and setting info "space needs to be after set"
$query = $_SESSION["connection"]->query("INSERT INTO landingpage SET "
        . "Full Name = '$username',"
        . "Email Address = '$hashedPassword',"
        . "salt = '$salt'");
if ($query) {
    echo "Successfully created user: $username";
} else {
    echo "<p>" . $_SESSION["connection"]->error . "</p>";
}
?>

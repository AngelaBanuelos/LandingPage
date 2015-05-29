<?php

//this looks for database.php
require_once(__DIR__ . "/../model/config.php");

$query = $_SESSION["connection"]->query("CREATE TABLE landingpage ("
        . "Full Name varchar(200) NOT NULL AUTO_INCREMENT, "
        . "Email Address varchar(200) NOT NULL,"
        . "Subject varchar(200) NOT NULL, "
        . "Your Message varchar(200) NOT NULL, "
        . "PRIMARY KEY (id))");
if($query) {
		//checks if the table was created successfully
		//echo "<p>Successfully created table: users</p>";
	}
	else{
		//added a session variable, which preserves info
		//echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
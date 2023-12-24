<?php
// DB credentials and this name of the database 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'animal_lost_and_found');

// Establish the database connection
try {
    $dbh = new PDO("mysql:host=" . DB_HOST .  ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));


    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected to the " . DB_NAME . " database successfully!";
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

<?php

// prepare database connection variables
$db_host = 'localhost';
$db_name = 'nano_tech';
$db_user = 'root';
$db_pass = '';

// connect
try {
    // If you change db server system, change this too!
    $pdo = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
}
catch (PDOException $e) {
    echo $e->getMessage();
}

//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
date_default_timezone_set('Asia/Bangkok');

?>
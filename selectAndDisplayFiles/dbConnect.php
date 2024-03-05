<?php
/*  PHP Connect File

    This file will allow any PHP page to connect to a database.
    We can use this on multiple pages.  Use the 'require' to bring into a page.
*/

$servername = "localhost";
$database = "wdv341";

$username = "root";         //to the database
$password = "";             //to the database

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} 

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
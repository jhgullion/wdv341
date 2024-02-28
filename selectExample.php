<?php
//this page will SELECT data from our wdv341 database

//  1. Connect to the database
//  2. Create your SQL query
//  3. Prepare your PDO Statement
//  4. Bind Variables to the PDO Statement, if any
//  5. Execute the PDO Statement - run your SQL against the database
//  6. Process the results from the query

require 'dbConnect.php';

$sql = "SELECT events_name, events_description FROM wdv341_events";     //SELECT columns FROM a table

$stmt = $conn->prepare($sql);                       //prepare your PDO Prepared Statement

$stmt->execute();       

//Process the result of your query
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);    //return values as an ASSOC array

$user = $stmt->fetch();                 //return the first row of the result - ASSOC array

echo "<p>" . $user["events_name"] . "</p>";
echo "<p>" . $user["events_description"] . "</p>";

?>
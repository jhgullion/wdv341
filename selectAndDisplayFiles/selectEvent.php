<?php
//selectEvent.php will pull a single result/row from our database table using a SELECT query with WHERE Clause

//  1. Connect to the database
//  2. Create your SQL query
//  3. Prepare your PDO Statement
//  4. Bind Variables to the PDO Statement, if any
//  5. Execute the PDO Statement - run your SQL against the database
//  6. Process the results from the query

try {
    require 'dbConnect.php';      
    
    $eventID = 1;

    $sql = "SELECT events_id, events_name, events_description, DATE_FORMAT(events_date, '%W %M %e %Y' ) as eventsFormatDate FROM wdv341_events WHERE events_id = :eventID"; 

    $stmt = $conn->prepare($sql);                       //prepare your PDO Prepared Statement

    //bind variable to the PDO statement
    $stmt->bindParam(":eventID", $eventID);             //assign the value of the variable to the placeholder

    $stmt->execute();           //result of the query, is stored in the $stmt variable/object
                                //the result looks and acts like a database

    $stmt->setFetchMode(PDO::FETCH_ASSOC);    //return values as an ASSOC array
}

catch(PDOException $e){
    {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
  
        error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
        error_log($e->getLine());
        error_log(var_dump(debug_backtrace()));
    
        //Clean up any variables or connections that have been left hanging by this error.		
    
        //header('Location: files/505_error_response_page.php');	//sends control to a User friendly page
        echo "<h1>$message</h1>";					
    }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>SELECT Demonstration Page</h2>
    <h2>SelectEvents from the WDV341 Database</h2>

    <div>
        <?php
            while( $row = $stmt->fetch() ){
        ?>
                <p>Event Name: <?php echo $row["events_name"]; ?></p>
                <p>Event Description: <?php echo $row["events_description"] ?></p>
                <p>Event Date: <?php  echo $row["eventsFormatDate"];?></p>
        <?php
            }
        ?>

</div>
</body>
</html>
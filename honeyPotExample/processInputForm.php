<?php

    //get the data from the form
    $inName = $_POST['inName'];
    $inSchool = $_POST['inSchool'];

    //check for honeypot
    $inCity = $_POST['inCity'];


    //if($inCity === ""){           //OPTION 1 - Field SHOULD be blank by a human user
    if($inCity === "Des Moines"){    //OPTION 2 - Field SHOULD contain 'Des Moines' by a human user
        //Honeypot is empty 
        //Most likely a real person entered the form - Process the Form
        //We should process the form data
    }
    else{
        //Something is in the field - MOST likely a BOT has accessed our form
        //DO NOT PROCESS form
        die("This BOT will not process the form");
        //redirect back to form or login or index/home page
    }

    //HoneyPot is a fake HTML field on the form, hide that field from view
    //If there is a value in the honeypot field - Most likely have a Bot and should ignore that data


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
    <h2>Honey Pot Example</h2> 
    <p>Name: <?php echo $inName; ?></p> 
    <p>School: <?php echo $inSchool; ?></p> 
    <p>City (HoneyPot): <?php echo $inCity; ?></p> 
</body>
</html>
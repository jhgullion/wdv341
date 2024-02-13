<?php

    function displayName(){
        echo "Jeff";
    }

    $schoolName = "DMACC";      //scope? Global     datatype? String

    $schoolName = "ISU";        //define a new variable or change the value of a variable?

    function displaySchool(){
        //function look for a local variable FIRST

        //$schoolName = "Iowa";
        global $schoolName;     //tells the function to use the Global version

        echo $schoolName;       //scope? Local      datatype? unknowne - undefined
        
        $schoolColors = "red";
        echo $schoolColors;  
    }

    function displayFruitName($inputFruitName){
        //pass a parameter and return the input value in all uppercase
        return strtoupper($inputFruitName);        //returns a string in all uppercase
    }

    /* 'catch' a return value
        1. assign the return value to a variable
        2. pass the return value as parameter into a function
        3. display the return value
    */
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
    <h2>PHP Functions and Examples</h2> 
    <h3>Hello <?php displayName();  ?></h3>
    <h3>School Name: <?php displaySchool(); ?></h3>
    <h3>
        <?php echo displayFruitName("Apple"); ?>
    </h3>
</body>
</html>
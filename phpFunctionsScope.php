<?php

    //PHP variable uses $, no keyword to define a variable
    $productName = "Stapler";           //scope Global - use this variable anywhere

    function displayProductName($inProductName){
        echo $inProductName;
    }

    displayProductName("Pencil");

    //echo $inProductName;          //error - variable not defined

    function displayProductNameVariable(){
        global $productName;        //telling the function to use the global variable
        echo $productName;
    }

    function testVariable(){
        global $productName;
        $newValue = 5;
        $productName = "Blue Pen";      //
    }

    displayProductNameVariable();

    $productName = "Red Pencil";

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
    <h2>Unit-3 Functions and Variable Scope</h2>
</body>
</html>
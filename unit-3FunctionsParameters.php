<?php

    $productName = "hammer";        //data type? String   scope? global
    $productPrice = 8.99;           //data type? float    scope? global

    function productInfo($inProdName,$inProdPrice){
        //display the product info   how to get the data needed into this function
        //1. access global variables if available
        //2. pass as parameters into function
        //3. gather/use form data from user
        //4. access a database to get data
        //5. access PHP session variables for data
        //6. access HTTP cookies for data
        //7. ask for data from another process - 
        $formattedProduct = $inProdName . ": unit price: " . $inProdPrice;
        return $formattedProduct;    
    }

    //call the function
    productInfo("Pliers",4.99);
    productInfo(1.99,"Masking Tape");       



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
    <h2>Unit-3 Function Parameters</h2>
    <ol>
        <li><?php echo productInfo("Pliers",4.99); ?></li>
        <li><?php echo productInfo(1.99,"Masking Tape");  ?></li>
    </ol>
</body>
</html>
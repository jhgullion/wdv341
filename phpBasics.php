<?php
//MODEL - data
//assign variables at top of page
//access a database at top of page

$firstName = "Mary";    //PHP variable - datatype? String

$colors = array("Red","Green","Blue");

//CONTROLLER - business logic/general code



//VIEW - user interface
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WDV341 Intro HTML</h1>
    <h2>PHP Basics and Examples</h2>
    <?php
        echo "<h3>Hello from PHP</h3>";
    ?>

    <h3 class=<?php echo "'greetingLine'" ?>>Welcome: <?php echo "Mary";  ?> </h3>

    <label for="colorRed">Red:</label>
    <input type="radio" name="colorGroup" value="red">

    <?php
        echo "<label for='colorBlue'>Blue:</label>";
        echo "<input type='radio' name='colorGroup' id='colorBlue' value='blue'>";
    ?>

    <?php

        for($x=0; $x < count($colors); $x++){
            $radioColor = $colors[$x];
            //echo $colors[$x];
            echo "<div>";
            echo "<label for='color$colors[$x]'>$radioColor:</label>";
            echo "<input type='radio' name='colorGroup' id='color$radioColor' value='"
            . strtolower($radioColor) . "'>";
            echo "</div>";
        }
    ?>

</body>
</html>
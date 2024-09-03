<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>PHP Basics - If statement</h2>

    <?php
        /*
            The time is before display a "Good Morning" greeting
            else display "Good Afteroon"
        */

        echo date("H");         //24 hour 

        If(date("H") <= 12){
            echo "<h3>Good Morning</h3>";
        }
        else{
            echo "<h3>Good Afternoon</h3>";
        }

        /*
            If it's morning output a radio button
            else checkbox

            if(){
                display a chunk of HTML
            }
            esle{
                display a different chunk of HTML
            }
        */
    ?>

    <div class="greeting">
        <?php
            if(date("H") <= 12){
        ?>
            <label>Morning</label>
            <input type='radio'>
        <?php
            }
            else{
        ?>
            <label>Afternoon</label>
            <input type='checkbox'>
        <?php
            }
        ?>

    </div>
</body>
</html>
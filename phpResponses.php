<?php



?>
<html>
    <head>
        <title>WDV341 PHP Examples</title>
        <style>

        <?php
                echo "p {color:blue;}";
        ?>

        </style>
        <script>

            <?php
                echo "let customerName = 'Mary';";
                echo "cars = ['ford','chevy']";
            ?>

        </script>
    </head>


    <body>
        <h1>WDV341 Intro PHP</h1>
        <h2>PHP Output/Display Examples</h2>
        <?php
            echo "<p>This was displayed by PHP.</p>";
        ?>
        <h3>
            <?php
                //if time of day is after 6pm then display "Good Evening" in blue letters
                //else display "Hello!" in black letters
                //echo date("H");

                $serverHour = date("H");
                //$serverHour = 19;             //testing both sides of the greeting
                if($serverHour> 18){
                    echo "<h3 style='color:blue'>Good Evening!</h3>";
                }
                else{
                    echo "<h3>Hello!</h3>";
                }


            ?>
        </h3>
        <?php
            //if the user response  = 1 display Frog card, if 2 display Dog Car, if 3 display Cat
            //else display "Please make a selection next time!"
            $userResponse = 1; 
        ?>
        <?php 
            if($userResponse == 1){
                echo "
                    <div>
                            <img src='frog.jpg'>
                            <p>This is my Frog!</p>
                    </div>
                ";
            }
        ?>
        <?php
            if($userResponse == 2){
                echo "<div>";
                echo "<img src='dog.jpg'>";
                echo "<p>This is my Dog!</p>";
                echo "</div>"; 
            }    
        ?>
        <?php
            if($userResponse == 3){
        ?>

                <div>
                        <img src="cat.jpg">
                        <p>This is my cat!</p>
                </div>
        <?php
            }   //end of the true branch for cat
        ?>

    </body>


</html>

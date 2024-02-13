<?php
    //MVC   - Model:data   View:HTML content  Controller:Business logic/processing
    //Model/data at the top of the application
    //Controler business logic/processing (most of the PHP code)
    //VIEW - html section

    //array - a group/list/collection/table/array of values with the same name

    //use a PHP array to build a JavaScript array

    $carArray = array("Ford", "Kia", "Chevrolet");      //numericaly indexed array

    $carArray2 = array("car1"=>"Ford", "car2"=>"Kia", "car3"=>"Chevrolet"); //Associative

    //echo $carArray[1];  //should be Kia

    //echo $carArray2["car2"]; //should be Kia

    $fruits = ["Apple","Peach","Banana","Pear"]; 
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        let newCars = new Array("Ford","Kia","Chevrolet");

        let cars = ["Ford","Kia","Chevrolet"];

        let fruits = [<?php //echo "'".$fruits[0]."'" . ", '".$fruits[1]."'";
                        foreach($fruits as $fruit){
                            echo "'".$fruit."',";
                        }
                    ?>];
        console.log(fruits);
        console.log(fruits[2]);

        <?php
        //sent the values to JavaScript and had JavaScript push the values into the array
        foreach($carArray as $car){
            echo "fruits.push('" . $car . "');";        }
        ?>
        console.log(fruits);

        let carsObject = {
            car1:"Ford",
            car2:"Kia",
            car3:"Chevrolet"
        }

        let car1 = {
            carName:"Ford",
            carType:"Truck",
            carColor:"Red"
            //pieces of information related to the same topic/object
        }

    </script>
</head>
<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Using PHP to display/output JavaScript</h2>
</body>
</html>
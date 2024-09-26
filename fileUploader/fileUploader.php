<?php 

    //$target_dir = "uploads/";
    //$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    //1. define the location where you are going to store the uploaded file
    $hostImageFolder = "uploadedImages/";    

    echo basename($_FILES["inFile"]["name"]);

    // define the filename to save the file as on the host
    $hostImagePath = $hostImageFolder . "somePicture.jpeg"; //basename($_FILES["inFile"]["name"]);

    echo "<h3>$hostImagePath</h3>";

    //move the uploaded file to my directory on the host/localhost
    move_uploaded_file($_FILES["inFile"]["tmp_name"], $hostImagePath ); 
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
</body>
</html>
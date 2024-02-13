<?php

    $today = date("l"); 
    
    echo $today;


    echo "<p>" . date("F j Y") . "</p>";

    echo "<p>" . date("n/j/Y") . "</p>";

    echo "<p>" . date("j/n/Y") . "</p>";    // day/month/year

    echo "<p>" . date("n-j-Y") . "</p>";

    echo "<p>Today: " . date(" n") . "</p>";

    //make a due date for 2/20/204  
    // date("j/n/y", $dueDate);     
    // $dueDate must be a Unix Timestamp
    // how to create a Unix Timestamp for 2/20/204

    //1. Make the Unix Timestamp for desired date

    $dueDate = mktime(0,0,0,2,20,2024);

    //2. format the desired date and display
    echo "<p>Due Date: " . date("n/j/y",$dueDate) . "</p>";

    //use strtotime() to create Unix Timestamp

    $d = strtotime("2/20/2024");
    echo "<p>Due Date: strtotime() " . date("n/j/y",$d) . "</p>";

    $d = strtotime("Feb 20th, 2024");
    echo "<p>Due Date: strtotime() " . date("n/j/y",$d) . "</p>";

    $d = strtotime("2 20 2024");
    echo "<p>Due Date: strtotime('2 20 2024') " . date("n/j/y",$d) . "</p>";

    $d = strtotime("21312414214");
    echo "<p>Due Date: strtotime('2 20 2024') " . date("n/j/y",$d) . "</p>";

    $d = strtotime("+14 days");
    echo "<p>Due Date: strtotime('+14 days') " . date("n/j/y",$d) . "</p>";
?>
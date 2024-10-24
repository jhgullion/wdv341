<?php
    //Test the Event class to make sure all of the methods work as expected

    require "Event.php";        //get access to the Event class

    //instantiate a new object from the event class
    $eventObject = new Event();      //use the name of the Class as the contructor method name

    //set values into the new object
    $eventObject->setEventsID(5);
    $eventObject->setEventsName("Test Event Class");
    //$eventObject->setEventsDescription("Using PHP to test the Event Class");
    //$eventObject->setEventsPresenter("Jeff Gullion");

    //get values from the new Event object
    echo "<p>Events ID: " . $eventObject->getEventsID();
    echo "<p>Events Name: " . $eventObject->getEventsName();

    //accessing the properties directly from the object
    //echo "<p>Events ID property " . $eventObject->eventsID;       //this caused ERROR - private property
    echo "<p>Events Name property: " . $eventObject->eventsName;

    $eventObject->eventsName = "This no longer works!!!!";
    echo "<p>Events Name property: " . $eventObject->eventsName;

    
?>
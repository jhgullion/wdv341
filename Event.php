<?php
//This is a class file for the wdv341_events table
//Author: Mary Smith
//Date:  10/22/2024

class Event{
    //properties

    private $eventsID;
    public  $eventsName;
    public  $eventsDescription;
    private $eventsPresenter;
    

    //constructor method - It sets the default values of the properties in the NEW object
    //                      DOES NOT CREATE THE NEW OBJECT
    function __construct(){
        //usually use an empty (no parameters)
        //set the default values of the properties of the new object
        $this->eventsID = 0;
        $this->eventsName = "";
        $this->eventsDescription = "";
        $this->eventsPresenter = "";
    }

    //methods
        //  setters/getters  acessors/mutators
        //      setter - takes an input value and applies to a property
        //      getter - returns the value of a property
    function setEventsID($inID){
        $this->eventsID = $inID;        //assign the input value to a property
    }
    function getEventsID(){
        return $this->eventsID;         //return the value to the function call
    }

    function setEventsName($inName){
        $this->eventsName = $inName;
    }
    function getEventsName(){
        return $this->eventsName;
    }

    function setEventsDescription($inDesc){
        $this->setEventsDescription = $inDesc;
    }
    function getEventsDescription(){
        return $this->setEventsDescription;
    }

    function setEventsPresenter($inPresenter){
        $this->eventsPresenter = $inPresenter;
    }
    function getEventsPresenter(){
        return $this->eventsPresenter;
    }

        //  processing methods
}








?>
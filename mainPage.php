<?php

    include 'phpFunctions.php';           //brings an external file
    //literally copies the content of the external into the page at this point
    //if it can't the file, the program continues.  Missing content may cause future problems.
    

    require 'phpFunctions.php';       //does the same thing
    //if it can't find the file this will end the program!  Fatal error if file not found
    



?>
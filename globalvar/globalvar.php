<?php

    //global variables
    //are also called superglobals  that can be access anywhere 

    // GLOBALS
    //using this the variable  can be asscess outside the function and going to store it as array

    $a = 10;
    $b = 20;
    function numbers() {
        //echo $a;
        $GLOBALS['result']=$GLOBALS['a']+$GLOBALS['b'];
        echo $GLOBALS['result'];
    }

    numbers();
?>
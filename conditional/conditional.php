<?php

    //conditional statements
    // if

    // $a = 9;
    // if ($a == 9) {
    //     echo "his age is 9";
    // }

    //if-else

    // $day = "sunday";

    // if ($day == "sunday") {
    //     echo "its time for service";
    // } else {
    //     echo "another day to be home";
    // }

    //if-elseif-else
    $time = 22;
    if ($time < 12) {
        echo "Good morning";
    }else if ($time < 17) {
        echo "good afternoon";
    }else if ($time < 22){
        echo "good evening";
    }else {
        echo "good night";
    }
    
?>
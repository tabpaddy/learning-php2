<?php
    //logical operator
    //and,or,xor,not

    //and
    //if both are true execute
    // $x = 10;
    // $y = 15;
    // if ($x == 10 and $y == 15){// wec use either "and" or "&&"
    //     echo "i'm printed";
    // }else {
    //     echo "i'm outside";
    // }

    // or
    // $x = 10;
    // $y = 15;
    // if ($x == 10 or $y == 151){// if either one of the condition is true execute
    //     echo "i'm printed";
    // }else {
    //     echo "i'm outside";
    // }

    // not
    //its going to execute the reverse of the operation
    // $x = 0;
    // echo !$x;

    // xor
    // any condition should be true and both condition should not be true or false to be executable
    $x = 10;
    $y = 15;
    if ($x == 10 xor $y == 15){// if either one of the condition is true execute
        echo "i'm printed";
    }else {
        echo "i'm outside";
    }

?>
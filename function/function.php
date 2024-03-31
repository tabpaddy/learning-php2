<?php
//function
//is a block of statement that can be use again nd again and call anywhere in the program

//basic function 

// function message(){
//     echo "thank you";
// }

// message();


// function with argument

// function message($name, $greetings){
//     echo "$greetings thank you ".$name."<br>";
// }

// message("praise", "good afternoon");
// message("emma", "good afternoon");
// message("john", "good afternoon");
// message("ben", "good afternoon");


//:

declare(strict_types=1);
function numbers(int $x, float $b):float
{
    return $x + $b;
}

echo numbers(10, 10.7);


?>
<?php

    //array operator

    $colors1 = array("blue"=>"2 paint", "green"=>"5 paint");
    $colors2 = array("black"=>"2 paint", "red"=>"5 paint");

    //+ is called union operator in array 
    // print_r($colors1 + $colors2)."<br>";//it combine everything and give out the output

    //== equlity operator
    var_dump(($colors1 == $colors2))."<br>";//checking the keys for it to executed
    //===
    var_dump(($colors1 === $colors2))."<br>";//the value and key should be in the same other in order for it to print nd called identity operator

    //!= not equality
    var_dump(($colors1 != $colors2))."<br>";


?>
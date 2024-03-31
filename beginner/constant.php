<?php

    //syntax of constants
    //you cant change the value of a constant variable
   // define(name, value, case_insensitive);

//    define("name", "praise", true);
//    echo name;

define("colors", ["blue", "green", "yellow"]);
// echo colors[2];

function mycolors() {
    echo colors[1];
}

mycolors();
?>
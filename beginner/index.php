<!-- syntax of php -->
<?php
 echo "Hello world";

 // comments
 # & // are single line comment
 /* 
    multil line comment
 */

 //variables
 $myname = "praise";
 echo $myname ."<br>";


 //variable scope we have three type of variable scope listed below
 //local scope
 //global scope
 //static scope

 //local
 //a variable created inside a function, and u cant use it outside a function
//  $number1 = 30;
//  function texting(){
//    $number2 = 10;
//    echo $number2. "<br>";
//  }
//  texting();
//  echo $number2. "<br>";// it wont work becus it scope inside a variable

 //global scope
//  $number1 = 30;
//  function texting(){
//    $number2 = 10;
//    echo $number2. "<br>";
//  }
//  texting();
//  echo $number1. "<br>";

 //static scope
 $number1 = 30;
 function texting(){
   static $number2 = 10;
   echo $number2. "<br>";
   $number2--;
 }
 echo $number1. "<br>";
 texting();
 texting();
 texting();
 $number2 = 700;
 echo $number2. "<br>";
?>
<?php
//create and write file
//fopen()
//this function is to read the files and create the files
$mydata = fopen("php.txt","w");
// echo $mydata;

$text = "praise is a web developer";
fwrite($mydata, $text);//its used to write the file and takes two parameter

?>
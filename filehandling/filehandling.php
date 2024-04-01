<?php

    // readfile()
    //its going toread the text in the web
    // echo readfile("data.txt");

    //fopen
    //it takes two parameter while "r" means read mode nad "w" means write mode
    $mydata = fopen("data.txt", "r");
    // echo fread($mydata, filesize("data.txt"));//rad the file
    // fclose($mydata);//then close the file

    //fgets()
    //going to read the first line of the data file
    //echo fgets($mydata);

    //while(!feof($mydata)){}
    //to print line by line

    // while(!feof($mydata)){
    //     echo fgets($mydata);
    //     echo "<br>";
    // }

    //fgetc()
    //this return character by character
        while(!feof($mydata)){
        echo fgetc($mydata);
        echo "<br>";
    }
    fclose($mydata);
?>
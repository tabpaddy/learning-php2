<?php

    //$_SERVER
    //is an array containing information such as headers, paths, and script locations. the entries in this array are created bt the web server.

    echo $_SERVER['PHP_SELF']."<br>";//returns the path and say we re executing the codes here
    echo $_SERVER['SERVER_ADDR']."<br>";//return the ip address of our localhost
    echo $_SERVER['SERVER_NAME']."<br>";//return the the server name
?>
<?php

    //they are used to store value
    // the data stored with session are saved in the server
    //seesion()
    //to use session
    session_start();
    $_SESSION['username']="praise";
    $_SESSION['password']="coding";
    $_SESSION['email']="coding@gmail.com";
    echo "session data is saved";

?>
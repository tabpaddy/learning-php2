<?php

    //it is used to store the information inside the system
    // cookies
    // it is a piece of informatiom stored inside a system...we should never set username and password using cookies


    //syntax and settting cookies

    // setcookie(name, value, expire, path);

    // $category_name = "food";
    // $category_value = "yam";

    // setcookie("$category_name",$category_value, time()+86400,"/");

    // echo "cookies is set";

    $category = "gadgets";
    $category_value = "iphone";

    setcookie("$category",$category_value, time()+(86400*2),"/");

    echo "cookies is set";


?>
<?php

session_start();
if(isset($_SESSION['username'])){
    echo "welcome ".$_SESSION['username'];
echo "<br>";
echo "and your password is ".$_SESSION['password'];
echo "<br>";
echo "and your email is ".$_SESSION['email'];
}else{
    echo "enter details again";
}



?>
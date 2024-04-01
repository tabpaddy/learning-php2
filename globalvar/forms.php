<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- post method -->
    <!-- collect form data -->
    <!-- <div class="container my-3">
        <form action="<?//php echo $_SERVER['PHP_SELF'];?>" method="post" class="" >
                <input type="text" name="fname" placeholder="first name" autocomplete="off">
                <br>
                <br>
                <input type="text" name="lname" placeholder="last name" autocomplete="off">
                <br>
                <br>
                <button type="submit">submit</button>
                <?php

// if ($_SERVER['REQUEST_METHOD']=='POST') {
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];

//     echo "My name is $fname $lname";
    
// }




?>
        </form>
    </div>  -->

    <!-- get method -->
    <!-- it used to collect data from our url -->
     <!-- <a href="<?php // echo $_SERVER['PHP_SELF']?>?subject=php">clickme</a>  -->

    <?php
    // get
    // is array of variable passed in the current script
   //echo "this is ".$_GET['subject']."tutorial";

    ?>

<!--  -->
    <form action="welcome.php" method="post">
        <input type="text" name="fname" placeholder="fname" autocomplete="off">
        <br>
        <br>
        <input type="text" name="lname" placeholder="lname" autocomplete="off">
        <br>
        <br>
        <button type="submit">submit</button>
    </form>

    <!-- <?php
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
        }

    ?> -->
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
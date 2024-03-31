<?php

    //break

    // for ($i=0; $i < 10; $i++) { 
    //     # code...
    //     echo $i."<br>";
    //     if ($i === 6) {
    //         # code...
    //         break;//going to completely stop the operation if the condition is satisfied
    //     }
    // }

    //continue

    for ($i=0; $i < 10; $i++) { 
        # code...
        if ($i === 6) {
            # code...
            continue;//its not going to stop the execution but continue the execution and give out the output
        }
        echo $i."<br>";
        
    }
?>
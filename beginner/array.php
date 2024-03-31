<?php
    //arrays
    //they are used to store multiple values
    // $colors = array("blue", "green", "yellow");
    // echo $colors[0]. "<br>";
    // echo var_dump($colors). "<br>";
    // print_r($colors). "<br>";

    //three types of array
    //indexed array
    // $colors = array("blue", "green", "yellow", "white", "black");
    // $colorsLength= count($colors);//going to give you number of items in the array
    // echo $colorsLength. "<br>";
    // for ($i=0; $i < $colorsLength ; $i++) { 
    //     echo $colors[$i]. "<br>";
    // }

    //associative array
    // $data = array("praise" => "csc", "basil" => "acc");
    // // echo $data['praise']. "<br>";
    // // echo $data['basil']. "<br>";

    // foreach ($data as $key => $value) {
    //     echo "key= ". $key . ", value= ".$value. "<br>";
    // }


    //multidimensional array
    // $color = array(array('red',11), array('blue',10), array('orange', 22));
    // echo $color[0][1]. "<br>";
    // echo var_dump($color). "<br>";

    // for ($i=0; $i < 3; $i++) { 
    //     echo "Row= ".$i. "<br>";
    //     for($col=0; $col < 2; $col++){
    //         echo $color[$i][$col]. "<br>";
    //     }
    // }


       //functions in arrays
       
       //sort() //sort in acceding order
    //    $fruits = array("apple", "mango", "pineapple", "banana");
    //    sort($fruits);
    //    print_r($fruits);

    // rsort() //sort in descending order
    // $fruits = array("apple", "mango", "pineapple", "banana");
    //    rsort($fruits);
    //    print_r($fruits);

    //asort() to sort associative arrays d values associated with the key value would be sorted in acceding order
    // $data = array("praise" => "csc", "basil" => "acc");
    // asort($data);
    // print_r($data)

    //ksort() sort the keys in acceding value
    // $data = array("praise" => "csc", "basil" => "acc");
    // ksort($data);
    // print_r($data)

    //arsort() to sort the values in decending order
    // $data = array("praise" => "csc", "basil" => "acc");
    // arsort($data);
    // print_r($data)

        //krsort() to sort the keys in decending order
        $data = array("praise" => "csc", "basil" => "acc");
        krsort($data);
        print_r($data)
?>
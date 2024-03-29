<?php
    //data types

    //string
    // $name = "praise";
    // $language = 'PHP';
    // echo $name. "<br>";
    // echo $language. "<br>";
    // echo var_dump($language). "<br>";


    //int
    // $num = 10918;
    // echo $num. "<br>";
    // echo var_dump($num);

    //float
    // $num = 10.918;
    // echo $num. "<br>";
    // echo var_dump($num);

    //boolean
    // $isvalid = true;
    // echo $isvalid;
    // echo var_dump($isvalid);


    //arrays
    //objects
    //onject is a real instance of class
    class Fruits{
        public $name;
        public $color;

        public function setname($name){
            $this->name=$name;
        }

        public function getname(){
            return $this->name;
        }
        
    }

    $apple = new Fruits();
    $apple->setname("apple");
    echo $apple->getname();
    $apple->setname("mango");
    echo $apple->getname();

    //null
    // $fruits = "apple";
    // $fruits = null;
    // echo $fruits."<br>";
    // var_dump($fruits);

?>
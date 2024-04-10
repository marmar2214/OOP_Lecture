<?php

    class People{
        public $name = "Mar Mar Kyi";
        public $age = 28;
        public function eat($shop="Inyar Lake"){
            echo "I want to eat fried chicken from".$shop;
        }
    }

    $obj = new People();

    // var_dump($obj);

    echo $obj->eat("Hle Dan");

?>
<?php

    class People{
        public $name = "Kyaw Kyaw";
        public $age = 28;
        public function ChangeName() {
            $this->name = "Mg Mg";
        }
    }

    $obj = new People();

    echo $obj ->name;
    echo'<br>';

    $obj->ChangeName();
    echo $obj->name;


?>
<?php

    class People{
        public $name = "Mg Mg";
        public $age = 28;
    }

    class Dog{
        public $name= "Aung Net";
        public $age= 2;
    }

    $obj = new People(); //object create
    $dogobj = new Dog();

    var_dump("People Name =>".$obj->name);
    var_dump("Dog Age =>".$dogobj->age);

?>
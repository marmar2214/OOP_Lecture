<?php

    class Member{
        public $name = "Mg Mg";
        function __construct(){
            echo "My name is" .$this->name;
        }
    }


    class GoldMember extends Member{
        function getData(){
            echo "Something";
        }

        function __construct(){
            echo "My name is Kyaw Kyaw";
            parent::__construct();
        }
    }

    new GoldMember();

?>
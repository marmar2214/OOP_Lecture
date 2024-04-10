<?php

    class Magic{
        public $result=0;
        public function __construct()
        {
            echo "This is construct method";
        }

        public function __destruct()
        {
            echo "Result is =>" .$this->result;
        }

        public function Sum($num1,$num2){
            $this->result = $num1 + $num2;
        }


    }
    $obj = new Magic();
    $obj->Sum(4,3);

    // isset

    class Member{
        public $name = "Mg Mg";
        function __get($name)
        {
            echo "You try to get this property" .$name;
        }


    }

    $getObj = new Member();
    echo $getObj->somethingProperty;

    class GoldMember{
        public $age = 12;
        function __set($name, $value)
        {
            echo "You are trying to set non exit property {$name} with value of {$value}";
        }
    }

    $goldMember = new GoldMember();
    $goldMember->slfjjfj="KYAW";

    class DiamondMember{
        public $name = "Mg Mg";
        function __isset($name)
        {
            echo "You try to check this property".$name;
        }
    }

    $obj = new DiamondMember();
    // echo isset($obj->name); true ? false

    if(isset($obj)){
        echo "IS OK";
    }

    // call method


?>
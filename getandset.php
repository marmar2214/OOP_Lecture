<?php

    class Something{
        private $num = 324;
        function getData(){
            return $this->num;//$this က ခေါ်ထားတဲ့ အတွင်းဘဲအလုပ်လုပ်
        }
    }
    $obj = new Something();
    echo $obj->getData();
    
    class SetMethod{
        private $name = "Kyaw Kyaw";
        function setData($name){
            $this->name = $name;
        }

        function getData(){
            echo "My Name is" . $this->name;
        }
    }

    $anotherObj = new SetMethod();

    // echo $anotherObj->setData("Mg Mg");
    echo $anotherObj->getData();

?>
<?php

    // Inheritance-ဆင့်ပွားသုံးတာ
    class Member{
        public $name ="Kyaw Kyaw";
        public $age = 34;
        public $education = "B.C.Sc";

        function friendCount(){
            echo "This is Friend Count";
        }
    }

    class GoldMember extends Member{
        // public $name ="Kyaw Kyaw";
        // public $age = 34;
        // public $education = "B.C.Sc";
        public $coin = 11;
        // function friendCount(){
        //     echo "This is Friend Count";
        // }
    }

    class DiamondMember extends Member{
        public $diamond = 5;
    }

    $goldObj = new GoldMember();

    echo $goldObj->coin;
    echo"<br>";
    echo $goldObj->name;
    echo"<br>";
    echo $goldObj->education;
    echo "<br>";


?>
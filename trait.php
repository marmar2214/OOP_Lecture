<?php 

    trait First{
        public $name = "Mg Mg";
        public function Something(){
            echo "This is First Trait Method";
        }
    }

    trait Second {
        public $age = 23;
        public function SecondMethod(){
            echo "This is Second Trait Method";
        }
    }

    trait Hello {
        public $education = "B.C.Sc";

    }

    class Fourth {
        use Hello,First,Second;
        public $gender ="Male";
    }

    $obj = new Fourth();
    
    echo $obj->gender;

    echo "<br>";

    echo $obj->name;
    echo $obj->age;
    echo $obj->education;

?>
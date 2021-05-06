<?php
    class emp{

        public $name;
        public $age;
        public $lan;

        public function __construct($name,$age){

            $this->name=$name;
            $this->age=$age;
            $this->show();



        }

        public function show(){
            echo "$this->name age is $this->age and programming language is $this->lan <br>";
        }
  
    }

    class pm extends emp{

         public $lan;
         public $name;
         public $age;
        public function __construct($name,$lan,$age){
            $this->name=$name;
            $this->lan=$lan;
            $this->age=$age;
            $this->show();

        }

    }

    $s1= new pm("sanket","php",20);
    
?>
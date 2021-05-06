<?php
    
    class em{

        public $name="sanket";
        public $sallary=10000;


        function setname($name){

            $this->name=$name;
        }
        function getname()
        {
           echo" user name is $this->name <br> ";


        }
        function setsallary($sal)
        {
            $this->sallary=$sal;
        }

        function getsallary()
        {
           echo" $this->name sallary is $this->sallary";


        }
    }
    

    class pm extends em{

        public $lang="php";

        function __construct($lang){
            $this->lang=$lang;


        }

    }


    $q1=new pm("java");
    $q2=new pm("python");
    $q3=new pm("sql");
    $q2->setname("preet");
    $q2->getname();
    $q3->setname("jigar");
    $q3->getname();
    $q3->setsallary("6666666666666");
    $q3->getsallary();
        echo "The sallary of sanket is $q1->lang<br>";


    
?>
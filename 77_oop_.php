<?php

class player{
 
    public $name;
    public $speed=5;
    public $runing=false;


    function setname($name){
        $this->name=$name;
    }

    function getname(){
        return $this->name;
    }



}

$player1= new player();
$player1->setname("sanket");
echo $player1->getname();




?>
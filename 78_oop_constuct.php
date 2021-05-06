<?php

class em{

    public $name;
    public $sallary;

    function __construct($name,$sallary)
    {
        $this->name=$name;
        $this->sallary=$sallary;
    }

    function __destruct()
{
    echo "this is end of program $this->name<br>";
}

}

$s1= new em("sanket",50000);
$s2= new em("binal",50000);
$s3= new em("rajesh",50000);

echo "The sallary of sanket is $s1->sallary<br>";
echo "The sallary of binal is $s2->sallary<br>";
echo "The sallary of rajesh is $s3->sallary<br>";

?>
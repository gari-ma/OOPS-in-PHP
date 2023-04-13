<?php

class HumanBeing
{

    public $name;
    public $age;

    function speak(){
        echo "my name is :".$this->name;
    }
}

$hari= new HumanBeing();
$hari->name="hari";
$hari->age="25";
$hari->speak();
?>
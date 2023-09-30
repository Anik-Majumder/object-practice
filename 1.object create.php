<?php

class Human
{
    public $name;

    function sayHi()
    {
        echo "Hello ";
        echo "$this->name \n";
    }

    function greet()
    {
        echo "Hi ";
        echo $this->name;
        echo PHP_EOL;
        echo $this->sayHi();
    }

}

$obj = new Human();
$obje = new Human();


$obj->name = "rubel";
$obje->name = "anik";

// $obj->sayHi();
// $obje->sayHi();
$obj->greet();

// echo "$obj->name \n";
// echo $obje->name;





?>
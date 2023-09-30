<?php

class sayHi
{
    public $name;
    public $age;

    function __construct($personName, $personAge = 0)
    {
        $this->name = $personName;
        $this->age = $personAge;
    }

    function greet()
    {
        echo "hello {$this->name}. I am {$this->age} year old. \n";
    }

    function optionalGreet()
    {
        if ($this->age) {
            echo "hello {$this->name}. I am {$this->age} year old.";
        } else {
            echo "my name is {$this->name}.I dont know how old i am";
        }
    }
}

$nameObj = new sayHi("rubel", 50);
$optionalName = new sayHi("rubel");

$nameObj->greet();
$optionalName->optionalGreet();


?>
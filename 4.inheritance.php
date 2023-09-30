<?php

// class Father
// {

//     public $fatherNumber;
//     function __construct($num)
//     {
//         $this->fatherNumber = $num;
//         echo $this->fatherNumber;
//     }

//     function print100()
//     {
//         for ($i = 1; $i <= $this->fatherNumber; $i++) {
//             echo "$i \n";
//         }
//     }

//     function greet()
//     {
//         echo "hello from father";
//     }
// }

// class Son extends Father
// {
//     public $sonNumber;
//     function __construct($sonNum)
//     {
//         $this->sonNumber = $sonNum;
//     }

//     function print100()
//     {
//         for ($i = 1; $i <= 10; $i++) {
//             echo "$i \n";
//         }
//     }

//     function greet()
//     {
//         echo "hello from son";
//     }

// }

// $fatherObj = new Father(10);
// $sonObj = new Son();


// $sonObj->print100();



// class Father
// {

//     function __construct()
//     {
//         echo "this is from father";
//     }
// }

// class Son extends Father
// {

//     function __construct()
//     {
//         echo "this is from son";
//     }

//     function another()
//     {
//         parent::__construct();
//     }

// }

// $sonObj = new Son();

// $sonObj->another();



/*

class Father
{
    private $name;

    function __construct($personName)
    {
        $this->name = $personName;
        $this->sayHi();
        $this->sayHi2();
    }

    function sayHi()
    {
        echo "i am from {$this->name}";
    }


    function sayHi2()
    {
        echo "i am from {$this->name}";
    }
}

class Son extends Father
{
    function sayHi()
    {
        parent::sayHi2();
    }
    function sayHi2()
    {
        echo "hello sayhi2 from son";
    }
}

$sonObj = new Son("jamal");
// $fatherObj = new Father("kamal");

*/

/*

// chalculate the area of rectangle method 1

class shape
{
    protected $name, $area;

    public function __construct($name, $area)
    {
        $this->name = $name;
        $this->area = $area;
    }

    public function getArea()
    {
        echo "The area of {$this->name} is {$this->area} \n";
    }
}


class Rectangle extends shape
{
    public $a, $b;

    public function __construct($height, $width)
    {
        $this->a = $height;
        $this->b = $width;
        parent::__construct("rectangle", $this->calculateArea());
    }

    public function calculateArea()
    {
        return $this->a * $this->b;
    }
}


class Triangle extends shape
{
    public $a, $b, $c;

    public function __construct($height, $width, $length)
    {
        $this->a = $height;
        $this->b = $width;
        $this->c = $length;

        parent::__construct("triangle", $this->calculateArea());
    }

    public function calculateArea()
    {
        return ($this->a + $this->b + $this->c) / 2;
    }

}

$rectangleObj = new Rectangle(5, 6);
$triangleObj = new Triangle(7, 8, 9);

$rectangleObj->getArea();
$triangleObj->getArea();

*/

/*
// chalculate the area of rectangle method 2

class Shape
{
    protected $name, $area;

    public function __construct($name)
    {
        $this->name = $name;

        $this->calculateArea();
    }

    public function getArea()
    {
        echo "The area of {$this->name} is {$this->area} \n";
    }

}


class Rectangle extends Shape
{
    public $a, $b;

    public function __construct($height, $width)
    {
        $this->a = $height;
        $this->b = $width;
        parent::__construct("Rectangle");
    }

    public function calculateArea()
    {
        $this->area = $this->a * $this->b;
    }
}


class Triangle extends shape
{
    public $a, $b, $c;

    public function __construct($height, $width, $length)
    {
        $this->a = $height;
        $this->b = $width;
        $this->c = $length;

        parent::__construct("triangle");
    }

    public function calculateArea()
    {
        $this->area = ($this->a + $this->b + $this->c) / 2;
    }

}

$rectangleObj = new Rectangle(5, 6);
$triangleObj = new Triangle(7, 8, 9);

$rectangleObj->getArea();
$triangleObj->getArea();

*/

?>
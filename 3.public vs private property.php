<?php

/*
// doing it with all the public properties
class Fund
{
    public $money;

    function __construct($initialMoney)
    {
        $this->money = $initialMoney;
    }


    function addMoney($taka)
    {
        $this->money += $taka;
    }

    function deductMoney($taka)
    {
        $this->money -= $taka;
    }

    function totalMoney()
    {
        echo $this->money;
    }


}

$moneyobj = new Fund(100);

$moneyobj->addMoney(20);

$moneyobj->deductMoney(50);

$moneyobj->totalMoney();

*/

// doing it with all the private properties

/*
class Fund
{
    private $money;

    function __construct($initialMoney)
    {
        $this->money = $initialMoney;
    }


    private function addMoney($taka)
    {
        $this->money += $taka;
    }

    private function deductMoney($taka)
    {
        $this->money -= $taka;
    }

    function totalMoney($add = 0, $deduct = 0)
    {
        if ($add && $deduct) {
            $this->addMoney($add);
            $this->deductMoney($deduct);
            echo $this->money;
        } elseif ($add) {
            $this->addMoney($add);
            echo $this->money;
        } elseif ($deduct) {
            $this->deductMoney($deduct);
            echo $this->money;
        } else {
            echo $this->money;
        }

    }


}

$moneyobj = new Fund(100);

$moneyobj->totalMoney(0, 50);

*/








?>
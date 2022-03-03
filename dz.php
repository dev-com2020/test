<?php
class A
{
var $poleA;

function showA()
    {
    echo "Funkcja showA z klasy A... <br>";
    }
}

class B extends A
{
var $poleB;

function showB()
    {
echo "Funkcja showB z klasy B... <br>";
    }
}

$obj = new B();
$obj->poleA = 100;
$obj->poleB = 200;

echo "Wartość pola poleA obiektu obj = $obj->poleA <br>";
echo "Wartość pola poleB obiektu obj = $obj->poleB <br>";

$obj->showA();
$obj->showB();

?>
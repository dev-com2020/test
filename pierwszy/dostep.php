<?php
class A
{
public $wartosc_1 = 10;
protected $wartosc_2 = 20;
private $wartosc_3 = 30;
public function wyswietl()
{
echo "wartosc_1 = $this->wartosc_1 <br>";
echo "wartosc_2 = $this->wartosc_2 <br>";
echo "wartosc_3 = $this->wartosc_3 <br>";
}
}
class B extends A
{
public function wyswietl()
{
    echo "wartosc_1 = $this->wartosc_1 <br>";
    echo "wartosc_2 = $this->wartosc_2 <br>";
    // echo "wartosc_3 = $this->wartosc_3 <br>";
    }
    }
    $objA = new A();
    $objB = new B();
    echo "Zawartość obiektu \$objA: <br>";
    echo "$objA->wartosc_1 <br>";
    //echo "$objA->wartosc_2 <br>";
    //echo "$objA->wartosc_3 <br>";
    $objA->wyswietl();
    echo "<br>Zawartość obiektu \$objB: <br>";
    $objB->wyswietl();
    ?>
<?php
class Osoba
{
    public $imie;
    public $nazwisko;


    function pokaz()
    {
    echo "Test metody pokaz...";
    echo "nazwisko: $this->nazwisko <br>";
    echo "imie: $this->imie <br>";
    }
}

$osoba1 = new Osoba();
$osoba1->imie = "Anna";
$osoba1->nazwisko = "Malinowska";
$osoba1->pokaz(); 



?>
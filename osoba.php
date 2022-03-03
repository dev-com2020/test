<?php
class Osoba
{
    public $imie;
    public $nazwisko;
    function __construct($imie,$nazwisko)
        {
        $this->nazwisko = $nazwisko;
        $this->imie = $imie;
        }

    function pokaz()
    {
    // echo "Test metody pokaz...";
    echo "nazwisko: $this->nazwisko <br>";
    echo "imie: $this->imie <br>";
    }
}

$osoba1 = new Osoba("Jan","Kowalski");
// $osoba1->imie = "Anna";
// $osoba1->nazwisko = "Malinowska";
$osoba1->pokaz(); 

// $osoba2 = new Osoba();
// $osoba2->pokaz(); 


?>
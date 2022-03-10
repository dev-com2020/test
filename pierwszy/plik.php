<?php
require_once "osoba.php";

class Uzytkownik extends Osoba
{
public $id;

function __construct($imie, $nazwisko, $id)
{
$this->imie = $imie;
$this->nazwisko = $nazwisko;
$this->id = $id;
}

function pokazId()
{
echo "Id: $this->id <br>";
}
}
?>
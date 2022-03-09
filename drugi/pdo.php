<?php
$dsn = "mysql:host=localhost;dbname=ksiegarnia";
$uzytkownik = "root";
$haslo = "";
try{
$dbo = new PDO($dsn, $uzytkownik, $haslo);
}
catch (PDOException $e){
echo 'Błąd podczas otwierania połączenia: ' . $e->getMessage();
exit;
}
echo 'Połączenie z bazą danych zostało nawiązane...<br>';
//Tutaj instrukcje wykonujące operacje na bazie danych
$dbo = null;
echo 'Połączenie z bazą danych zostało zamknięte...<br>';
?>
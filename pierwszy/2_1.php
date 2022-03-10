<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta content-type="text">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2_1</title>
</head>
<body>
<?php

define("IMIE","Tomek");
$imie = "Tomek";
const TEMAT = "PHP i SQL";
$a = "5";
(int)$b = 3;
$c = $a + $b;

    echo nl2br ("Czy to dziala?\n"); 
    echo "Wynik działania to= ", 2 + 2 - 3;
    echo "<br>";
    echo nl2br ("<b><i>Tutaj ma być pogrubiony tekst</i></b>\n");
    echo "Twoje imię:", IMIE;
    echo "<br>";
    echo "Typ zmiennej: ", gettype($a);
    echo "<br>";
    echo "A tu liczę: ", $a, " oraz ", $b, " i mam wynik: ", $c; 
    echo "<br>";
    echo "Temat kursu: ", TEMAT;
?>  

</body>
</html>
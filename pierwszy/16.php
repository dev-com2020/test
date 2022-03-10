<?php
$a = 1;

function funkcja(){
    global $a;
    echo "Wartość a = $a <br>";
}

function funkcja2(){
    $a = $GLOBALS["a"];
    echo "Wartość a = $a <br>";
}

function funkcja3(){
    $liczba = 100;
    echo "Wartość liczby = $liczba <br>";
}

funkcja3();

echo "Wartość liczby = $liczba <br>";
echo "Wartość a = $a <br>";

?>
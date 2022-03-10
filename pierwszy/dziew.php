<?php
//Deklaracje zmiennych
$A = 1;
$B = 1;
$C = -2;
//Wyświetlenie parametrów równania
echo "Parametry równania: <br>";
echo "A = $A, B = $B, C = $C <br>";
//Sprawdzenie, czy jest to równanie kwadratowe
if ($A == 0) {
//A jest równe zero, równanie nie jest kwadratowe
echo "To nie jest równanie kwadratowe: A = 0!";
}
else {
//A jest różne od zera, równanie jest kwadratowe
//Obliczenie delty
$delta = $B * $B - 4 * $A * $C;
//W PHP 5.6 i wyższych również
//$delta = $B ** 2 - 4 * $A * $C;
//Jeśli delta mniejsza od zera
if ($delta < 0) {
echo "Delta < 0 <br>";
echo "Brak rozwiązań w zbiorze liczb rzeczywistych!";
}
//Jeśli delta większa od zera lub równa zero
else {
//Jeśli delta równa zero
    if ($delta == 0) {
    //Obliczenie wyniku
    $wynik = -$B / (2 * A);
    echo "Rozwiązanie: x = $wynik";
    }
    //Jeśli delta większa od zera
    else {
    //Obliczenie wyników
    $wynik = (-$B + sqrt($delta)) / (2 * $A);
    echo "Rozwiązanie: x1 = $wynik";
    $wynik = (-$B - sqrt($delta)) / (2 * $A);
    echo ", x2 = $wynik";
    }
    }
    }


    if(($liczba <= 100 && $liczba >= 10) && ($licznik != 24 || $licznik == 15)){
        //Instrukcje do wykonania
        }

        if($liczba > 5 && $liczba < 20){
            //Instrukcje do wykonania
            }

            // warunek ? wartość1 : wartość2

        $cyfra = 10;
        $cyfra2 = $cyfra < 0 ? -1 : 1;
        echo $cyfra2;
?>
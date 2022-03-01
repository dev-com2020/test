<?php
declare(strict_types=1);


// <!-- 
//     function nazwa_funkcji(){
// //Instrukcje wnętrza funkcji
// } 
// -->

function funkcja(){
    echo "Instrukcje funkcji zostały wykonane...";
}

// function razyDwa($x){
//     $wynik = $x * 2;
//     echo "$x * 2 = $wynik";
//     }

    function razyDwa($x){
        return $x * 2;
        }

    function dodaj($x, $y){
        $wynik = $x + $y;
        echo "$x + $y = $wynik";
        }

        function jakaWartosc($liczba):string{
            if($liczba < 0){
                return "ujemna";
            } else if ($liczba > 0){
                return "dodatnia";
            } else {
                return "zero";
                }
            }

    function dajWartosc():float{
        return 1.25;
    }

echo dajWartosc();

// dodaj(5,10);

// echo jakaWartosc(1);

// $wynik = razyDwa(5);
// echo "Wynik = $wynik";

// funkcja();

?>

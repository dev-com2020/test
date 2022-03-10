<?php
// function dodajJeden(int &$liczba){
// $liczba = $liczba + 1;
// }
// $liczba = 1;
// echo "Przed wywołaniem funkcji liczba = $liczba <br>";
// dodajJeden($liczba);
// echo "Po wywołaniu funkcji liczba = $liczba <br>";


// function nazwa_funkcji ($argument1 = wartość, $argument2 = wartość2, ...,
// $argumentN = wartośćN){
// //Treść funkcji
// }

function dodaj(&$liczba, $ile = 1){
    $liczba = $liczba + $ile;
    }

    $liczba = 1;

    // echo "Przed wywołaniem funkcji liczba = $liczba <br>";
    
    // dodaj($liczba, 5);
    // echo "Po 1. wywołaniu liczba = $liczba <br>";
    // print($liczba);
    // print("<br>");
    // dodaj($liczba);
    // echo "Po 2. wywołaniu liczba = $liczba <br>";

    function func(){
        $liczba_arg = func_num_args();
        $str = "";
        for($i = 0; $i < $liczba_arg; $i++){
            $str .= (string) func_get_arg($i);
        }
return $str;
}

// echo func(5);
// echo func(5,654.66);
// echo func(5,"tomek",66.322);


function func2(...$dane){
    
    $str = "";
    foreach($dane as $d){
        $str .= $d;
    }
return $str;
}


echo func2(5);
echo func2(5,654.66);
echo func2(5,"tomek",66.322);

?>


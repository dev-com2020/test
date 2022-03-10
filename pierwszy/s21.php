<?php
function sortuj($e1, $e2){
if($e1 % 2 == 0){
    if($e2 % 2 == 0){
        return $e1 - $e2;
        }
        else{
        return -1;
        }
        }
        else{
        if($e2 % 2 == 0){
        return 1;
        }
        else{
        return $e1 - $e2;
        }
    }
}



// echo "Zawartość tablicy przed sortowaniem: <br>";
// foreach($tab1 as $val){
// echo("$val ");
// }
// echo "<br>";

// usort($tab1, 'sortuj');

// echo "Zawartość tablicy po sortowaniem: <br>";
// foreach($tab1 as $val){
// echo("$val ");
// }
// echo "<br>";


// implode(separator, tablica)

// $kraje = array('Polska','Niemcy','Francja');
// echo implode('-->',$kraje);

// explode(separator, ciąg[, ile]);

// $str = 'jeden, dwa, trzy, cztery';
// $arr = explode(', ', $str,-2);
// echo implode('-->',$arr);

// $tab1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
// $tab2 = array_reverse($tab1);

// echo "Zawartość tablicy tab1:<br>";
// foreach($tab1 as $val){
// echo("$val ");
// }
// echo "Zawartość tablicy tab2:<br>";
// foreach($tab2 as $val){
// echo("$val ");
// }


$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$val = end($tab);

echo "Wynik działania end(\$tab): $val<br>";
prev($tab);
prev($tab);
$val = current($tab);
echo "Po dwukrotnym wykonaniu prev(\$tab) ";
echo "aktualnym elementem jest: $val<br>";
$val = reset($tab);
echo "Po wykonaniu reset(\$tab) aktualnym elementem jest: $val<br>";
next($tab);
next($tab);
$val = current($tab);
echo "Po wykonaniu 2 x next(\$tab) aktualnym elementem jest: $val<br>";

echo "Wynik działania pętli while wykonującej funkcję next: ";
while($val = next($tab)){
echo "$val ";
}
end($tab);
echo "<br>Wynik działania pętli while wykonującej funkcję prev: ";
while($val = prev($tab)){
echo "$val ";
}







?>



<!-- 
foreach($tablica as $wartość){
    instrukcje;
}
oraz:
foreach($tablica as $klucz => $wartość){
    instrukcje;
} -->

<?php
// $tab = array
// (
//     1 => 'jeden',
//     2 => 'dwa',
//     'trzy' => 3,
//     'cztery' => 4
// );
// foreach($tab as $v){
//     echo "$v <br>";
// }

$tab = array
(
    1 => 'jeden',
    2 => 'dwa',
    'trzy' => 3,
    'cztery' => 4
);
foreach($tab as $key => $v){
    echo "tablica[$key] = $v <br>";
}
?>

<?php
$tab = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo "Pierwotna zawartość tablicy: ";
foreach($tab as $val){
echo "$val ";
}

$val = array_pop($tab);
echo("<br>Wynik pierwszej operacji pop: $val <br>");
$val = array_pop($tab);
echo "Wynik drugiej operacji pop: $val <br>";
echo "Aktualna zawartość tablicy: ";
foreach($tab as $val){
echo "$val ";
}

$val = array_shift($tab);
echo "<br>Wynik pierwszej operacji shift: $val <br>";
$val = array_shift($tab);
echo "Wynik drugiej operacji shift: $val <br>";
echo "Aktualna zawartość tablicy: ";
foreach($tab as $val){
echo "$val ";
}

array_push($tab, 1, 2);
echo "<br>Zawartość tablicy po operacji push: ";
foreach($tab as $val){
echo "$val ";
}
array_unshift($tab, 9, 10);
echo "<br>Zawartość tablicy po operacji unshift: ";
foreach($tab as $val){
echo "$val ";
}

?>
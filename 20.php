<?php
$tab1 = array(5, 7, 3, 1, 8, 2, 0, 4, 9, 6);
$tab2 = array('jeden', 'dwa', 'trzy', 'cztery', 'pięć');
echo "Zawartość tablic przed sortowaniem: <br>";

foreach($tab1 as $val){
echo "$val ";
}
echo "<br>";
foreach($tab2 as $val){
echo "$val ";
}

sort($tab1);
sort($tab2);

echo "Zawartość tablic po sortowaniu: <br>";

foreach($tab1 as $val){
    echo "$val ";
    }
    echo "<br>";
    foreach($tab2 as $val){
    echo "$val ";
    }





?>
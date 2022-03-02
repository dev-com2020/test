<!-- $tablica = array(wartość1, wartość2,..., wartośćN); -->

<!-- $tablica = array
(
wartość1,
wartość2,
...,
wartośćN
); -->

<?php
$kolory = array("czerwony", "zielony", "niebieski");

$kraje = array();
$kraje[0] = "Polska";
echo $kraje[0];


$kolory[2] = "Żółty";

// echo "kolory[0] = $kolory[0] <br>";
// echo "kolory[1] = $kolory[1] <br>";
// echo "kolory[2] = $kolory[2] <br>";

for($i = 0; $i < 3; $i++){
    echo "kolory[$i] = $kolory[$i] <br>";
    }


    $kolory2 = array
(
"kolor1" => "czerwony",
"kolor2" => "zielony",
"kolor3" => "niebieski"
);

$kolory2["kolor4"] = "żółty";


foreach($kolory2 as $kolor){
    echo $kolor;
    echo "<br>";
}

foreach($kolory2 as $klucz => $kolor){
    echo "kolory['$klucz']= $kolor";
    echo "<br>";
}


// echo "Zawartość tablicy:<br>";
// echo "kolory['kolor1'] = ";
// echo $kolory2['kolor1'];
// echo "<br>kolory['kolor2'] = ";
// echo $kolory2['kolor2'];
// echo "<br>kolory['kolor3'] = ";
// echo $kolory2['kolor3'];
// echo "<br>kolory['kolor4'] = ";
// echo $kolory2['kolor4'];

?>
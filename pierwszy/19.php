<?php
$tablica = array
(
array(1, 2, 3),
array(4, 5, 6)
);

// for($i = 0; $i < 2; $i++){
//     for($j = 0; $j < 3; $j++){
//     $wart = $tablica[$i][$j];
//     echo "tablica[$i][$j] = $wart";
//     echo "<br>";
//     }
//     echo "<br>";
//     }

    // foreach($tablica as $k1 => $tab){
    //     foreach($tab as $k2 => $wart){
        
    //     echo "tablica[$k1][$k2] = $wart";
    //     echo "<br>";
    //     }
    //     echo "<br>";
    //     }


// echo "tablica[0][0] = " . $tablica[0][0] . "<br>";
// echo "tablica[0][1] = " . $tablica[0][1] . "<br>";
// echo "tablica[0][2] = " . $tablica[0][2] . "<br>";
// echo "tablica[1][0] = " . $tablica[1][0] . "<br>";
// echo "tablica[1][1] = " . $tablica[1][1] . "<br>";
// echo "tablica[1][2] = " . $tablica[1][2] . "<br>";

// $tablica = array(
//     array("Autor" => "Autor1",
//     "Tytuł" => "Tytuł1",
//     "Numer" => "Numer1"),
//     array("Autor" => "Autor2",
//     "Tytuł" => "Tytuł2",
//     "Numer" => "Numer2"),
//     array("Autor" => "Autor3",
//     "Tytuł" => "Tytuł3",
//     "Numer" => "Numer3")
//     );



$biblioteka = array(
    'regał1' => array
    (
    array("Autor" => "Marcin Lis",
    "Tytuł" => "Java. Praktyczny kurs",
    "Numer" => "123"),
    array("Autor" => "Marcin Lis",
    "Tytuł" => "Tworzenie stron WWW. Praktyczny kurs",
    "Numer" => "234"),
    array("Autor" => "Marcin Lis",
    "Tytuł" => "JavaScript. Praktyczny kurs",
    "Numer" => "345")
    ),
    'regał2' => array
    (
    array("Autor" => "Orson Scott Card",
    "Tytuł" => "Gra Endera",
    "Numer" => "321"),
    array("Autor" => "Orson Scott Card",
    "Tytuł" => "Cień Endera",
    "Numer" => "432"),
    array("Autor" => "Orson Scott Card",
    "Tytuł" => "Mistrz Pieśni",
    "Numer" => "543")
    ),
    'regał3' => array
    (
    array("Autor" => "Alex Kava",
    "Tytuł" => "Zło konieczne",
    "Numer" => "213"),
    array("Autor" => "Kathy Reichs",
    "Tytuł" => "Pogrzebane tajemnice",
    "Numer" => "324"),
    array("Autor" => "Harlan Coben",
    "Tytuł" => "Nie mów nikomu",
    "Numer" => "435")
    )
    );
    foreach($biblioteka as $regal_nazwa => $regal){
    echo "Regał: $regal_nazwa<br>";
    foreach($regal as $ksiazka){
    $autor = $ksiazka['Autor'];
    $tytuł = $ksiazka['Tytuł'];
    $numer = $ksiazka['Numer'];
    echo "$autor | $tytuł | $numer";
    echo "<br>";
    }
    echo "<br>";
    }


    $tablica = array
(
array(1, 2, 3, 4),
array(5, 6),
array(7),
array(8, 9, 10)
);
foreach($tablica as $tab){
foreach($tab as $val){
echo "$val ";
}
echo "<br>";
}


?>
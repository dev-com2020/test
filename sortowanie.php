<?php
$pliki1 = $pliki2 = array(
"plik2.zip",
"plik10.zip",
"plik84.zip",
"plik22.zip",
"plik5.zip"
);
echo "Przed sortowaniem:<br>";
echo implode(" ", $pliki1);
usort($pliki1, "strcmp");
echo "<br><br>Po sortowaniu z użyciem strcmp:<br>";
echo implode(" ", $pliki1);
usort($pliki2, "strnatcmp");
echo "<br><br>Po sortowaniu z użyciem strnatcmp:<br>";
echo implode(" ", $pliki2);
?>
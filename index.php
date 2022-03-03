<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Użycie kilku obiektów</title>
</head>
<body>
<?php
require "osoba.php";

$osoby = array();

// $osoba1 = new Osoba();
// $osoba1->imie = "Jan";
// $osoba1->nazwisko = "Kowalski";

// $osoba2 = new Osoba();
// $osoba2->imie = "Michał";
// $osoba2->nazwisko = "Kowalski";

for($i = 0; $i < 3; $i++){
    $osoby[$i] = new Osoba();
}

$osoby[0]->imie = "Jan";
$osoby[0]->nazwisko = "Kowalski";

$osoby[1]->imie = "Tomasz";
$osoby[1]->nazwisko = "Kowalski";

$osoby[2]->imie = "Michał";
$osoby[2]->nazwisko = "Kowalski";

?>

<table border="1">
<caption>Zawartość tablicy $osoby</caption>
<tr>
<th>Imię</th>
<th>Nazwisko</th>
</tr>
<?php
// foreach($osoby as $osoba)
for($i = 0; $i < 3; $i++){
    echo "<tr>";
    echo "<td>".$osoby[$i]->imie."</td>";
    echo "<td>".$osoby[$i]->nazwisko."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
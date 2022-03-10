<?php
$datafile = "./colors.txt";
function show()
{
global $datafile;
if(file_exists($datafile)){
if(($fd = fopen($datafile, "r")) === false){
echo "Błąd serwera. Wyniki ankiety nie są dostępne.";
return;
}
}
else{
if(($fd = fopen($datafile, "w+")) === false){
echo "Błąd serwera. Wyniki ankiety nie są dostępne.";
return;
}
}
$czerwony = intval(fgets($fd));
$zielony = intval(fgets($fd));
$niebieski = intval(fgets($fd));
$fioletowy = intval(fgets($fd));
$czarny = intval(fgets($fd));
$inny = intval(fgets($fd));
$votes_no = $czerwony + $zielony + $niebieski + $fioletowy + $czarny + $inny;
$votes_no == 0?$votes_no = 1:0;
$czerwony_proc = sprintf("%.2f", $czerwony * 100 / $votes_no);
$zielony_proc = sprintf("%.2f", $zielony * 100 / $votes_no);
$niebieski_proc = sprintf("%.2f", $niebieski * 100 / $votes_no);
$fioletowy_proc = sprintf("%.2f", $fioletowy * 100 / $votes_no);
$czarny_proc = sprintf("%.2f", $czarny * 100 / $votes_no);
$inny_proc = sprintf("%.2f", $inny * 100 / $votes_no);
echo "<table border='1'>";
echo "<tr><td>Nazwa koloru</td><td>Liczba głosów</td>";
echo "<td>Procent głosów</td></tr>";
echo "<tr><td>czerwony</td><td>$czerwony</td>";
echo "<td>$czerwony_proc</td></tr>";
echo "<tr><td>zielony</td><td>$zielony</td>";
echo "<td>$zielony_proc</td></tr>";
echo "<tr><td>niebieski</td><td>$niebieski</td>";
echo "<td>$niebieski_proc</td></tr>";
echo "<tr><td>fioletowy</td><td>$fioletowy</td>";
echo "<td>$fioletowy_proc</td></tr>";
echo "<tr><td>czarny</td><td>$czarny</td>";
echo "<td>$czarny_proc</td></tr>";
echo "<tr><td>inny</td><td>$inny</td>";
echo "<td>$inny_proc</td></tr>";
echo "</table>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wyniki głosowania</title>
</head>
<body>
<?php show(); ?>
<p>
<a href="http://localhost/test/sonda.php">Wróć do strony głównej</a>
</p>
</body>
</html>
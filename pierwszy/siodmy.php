<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Konwersja typów</title>
</head>
<body>
<?php
$liczba1 = 1.5;
$liczba2 = intval($liczba1);
echo "$liczba1";
echo "<br>";
echo "$liczba2";

$napis = "123";
echo 'Zmienna $napis jest typu: ' . gettype($napis);
echo "<br>Jej wartość to $napis.<br>";
settype($napis, "integer");
echo 'Zmienna $napis jest typu: ' . gettype($napis);
echo "<br>Jej wartość to $napis.<br>";
?>
</body>
</html>
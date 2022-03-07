<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Odczytanie wartości pól z formularza</title>
</head>
<body>

<?php
$zmienna = $_GET['pole1'];
echo "Z formularza odczytano wartość: $zmienna <br>";

if(isset($_GET['radio1']) &&
($_GET['radio1'] == 'opcja1' || $_GET['radio1'] == 'opcja2' ||
$_GET['radio1'] == 'opcja3')){
echo "Zaznaczona opcja to: ";
echo $_GET['radio1'];
}
else{
echo "Nie została zaznaczona żadna opcja!";
}


?>

</body>
</html>
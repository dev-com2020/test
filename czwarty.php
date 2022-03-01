<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Obsługa błędów</title>
</head>
<body>
<?php
echo "Wywołanie bez znaku @:";
$my_file = file('plik');
echo "<br>-----<br>";
echo "Wywołanie ze znakiem @:";
$my_file = @file('plik');
echo "<br>-----<br>";
echo "Zawartość zmiennej \$php_errormsg: ";
echo $php_errormsg;
?>
</body>
</html>
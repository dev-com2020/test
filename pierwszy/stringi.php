<?php
$str7="123";
$str8="456";
$liczba = 100;
$ciag = "abcd";
$str1 = "Zmienna liczba = $liczba, a zmienna ciąg = $ciag.";
$str2 = 'Zmienna liczba = $liczba, a zmienna ciąg = $ciag.';
$str3 = <<<ID1
Zmienna liczba = $liczba,
a zmienna ciąg = $ciag.
ID1;
$str4 = <<<'ID2'
Zmienna liczba = $liczba,
a zmienna ciąg = $ciag.
ID2;
$str5 = $str7 + $str8;
$str6 = $str7 . $str8;

echo "Zmienna str1 (składnia ze znakami cudzysłowu):<br>";
echo $str1;
echo "<br><br>";
echo "Zmienna str2 (składnia ze znakami apostrofu):<br>";
echo $str2;
echo "<br><br>";
echo "Zmienna str3 (składnia heredoc):<br>";
echo $str3;
echo "<br><br>";
echo "Zmienna str4 (składnia nowdoc):<br>";
echo $str4;
echo "<br><br>";


echo "Wynikiem działania str1 + str2 jest: ";
echo "$str3<br>";
echo "Typ zmiennej str3 to: ";
echo gettype($str5);
echo "<br><br>";
echo "Wynikiem działania str1 . str2 jest: ";
echo "$str4<br>";
echo "Typ zmiennej str4 to: ";
echo gettype($str6);


?>
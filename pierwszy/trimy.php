<pre>
<?php
// $str = " ... _Przykładowy ciąg_ ... ";
// echo "Pierwotna zawartość ciągu str:<br>";
// echo "-$str-";
// $str = ltrim($str);
// echo "<br><br>Po wywołaniu ltrim(\$str):<br>";
// echo "-$str-";
// $str = rtrim($str);
// echo "<br><br>Po wywołaniu rtrim(\$str):<br>";
// echo "-$str-";
// $str = trim($str, "_. ");
// echo "<br><br>Po wywołaniu trim(\$str, \"_. \"):<br>";
// echo "-$str-";

$str = <<<ID1
Pierwszy wiersz tekstu.
Drugi wiersz tekstu.
Trzeci wiersz tekstu.
Czwarty wiersz tekstu.
Piąty wiersz tekstu.
ID1;
echo "Przed użyciem funkcji nl2br:<br>";
echo $str;
echo "<br><br>Po użyciu funkcji nl2br:<br>";
echo nl2br($str);
?>
</pre>


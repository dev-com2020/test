<!-- <?php
echo "date(\"Y-m-d\") = " . date("Y-m-d") . "<br>";
echo "date(\"d-m-Y\") = " . date("d-m-Y") . "<br>";
echo "date(\"j, M Y\") = " . date("j, M Y") . "<br>";
echo "date(\"jS, M Y\") = " . date("jS, M Y") . "<br>";
echo "date(\"G:i:s\") = " . date("G:i:s") . "<br>";
echo "date(\"h:i:sa\") = " . date("h:i:sa") . "<br>";
echo "date(\"Y-m-d G:i:s\") = " . date("Y-m-d G:i:s") . "<br>";
?> -->

<!-- 
<?php
$data = getdate();
$dzien = $data["mday"];
$miesiac = $data["mon"];
$rok = $data["year"];
if($dzien < 10) $dzien = "0" . $dzien;
if($miesiac < 10) $miesiac = "0" . $miesiac;
echo "$dzien-$miesiac-$rok";
?> -->

<!-- 
<?php
echo "Wywołania funkcji date:<br>";
echo "date(\"G:i\") = " . date("G:i") . "<br>";
echo "date(\"r\") = " . date("r") . "<br>";
echo "date(\"c\") = " . date("c") . "<br>";
echo "date(\"T\") = " . date("T") . "<br>";
echo "date(\"Z\") = " . date("Z") . "<br>";
echo "<br>Wywołania funkcji gmdate:<br>";
echo "gmdate(\"G:i\") = " . gmdate("G:i") . "<br>";
echo "gmdate(\"r\") = " . gmdate("r") . "<br>";
echo "gmdate(\"c\") = " . gmdate("c") . "<br>";
echo "gmdate(\"T\") = " . gmdate("T") . "<br>";
echo "gmdate(\"Z\") = " . gmdate("Z") . "<br>";
?> -->

<?php
echo strftime("Bieżąca strefa czasowa: %Z <br>");
echo strftime("Data: %d-%m-%Y <br>");
echo strftime("Czas: %H:%M:%S <br>");
echo strftime("Numer tygodnia: %U <br/>");
?>
<?php
$wartosc = 77;
printf("Przy użyciu ciągu %%b = %b <br>", $wartosc);
printf("Przy użyciu ciągu %%c = %c <br>", $wartosc);
printf("Przy użyciu ciągu %%d = %d <br>", $wartosc);
printf("Przy użyciu ciągu %%u = %u <br>", $wartosc);
printf("Przy użyciu ciągu %%f = %f <br>", $wartosc);
printf("Przy użyciu ciągu %%o = %o <br>", $wartosc);
printf("Przy użyciu ciągu %%s = %s <br>", $wartosc);
printf("Przy użyciu ciągu %%x = %x <br>", $wartosc);
printf("Przy użyciu ciągu %%X = %X <br>", $wartosc);

echo "Wartość 15, ciąg formatujący %'03d:<br>";
printf("%'03d", 15);
echo "<br>";
echo "Wartość 15, ciąg formatujący %'_-3d:<br>";
printf("%'_-3d", 15);
echo "<br>";
echo "Wartość 10.454647, ciąg formatujący %.2f:<br>";
printf("%.2f", 10.454647);
echo "<br>";
echo "Wartość 10.454647, ciąg formatujący %'06.2f:<br>";
printf("%'07.3f", 10.454647);
echo "<br>";

$format1 = "Liczba ma wartość %d, napis ma wartość %s.";
$format2 = "Napis ma wartość %s, liczba ma wartość %d.";
$format3 = "Napis ma wartość %2\$s, liczba ma wartość %1\$d.";
$liczba = 100;
$napis = "abcd";
printf($format1, $liczba, $napis);
echo "<br>";
printf($format2, $liczba, $napis);
echo "<br>";
printf($format3, $liczba, $napis);
?>



?>
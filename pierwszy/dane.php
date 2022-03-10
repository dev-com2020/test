<!-- 

http://adres.serwera/skrypt.php?parametr1=wartość1&parametr2=wartość2

    <form action="adres_skryptu">
<!-- Tutaj definicje elementów formularza -->
</form> 
-->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Przykładowy formularz</title>
</head>
<body>
<form method="get"
action="http://localhost/test/skrypt.php">
<input type="text" name="pole1">
<p>Proszę zaznaczyć jedną z opcji:</p>
<input type="radio" name="radio1" value="opcja1">
Opcja1<br>
<input type="radio" name="radio1" value="opcja2">
Opcja2<br>
<input type="radio" name="radio1" value="opcja3">
Opcja3<br><br>
<input type="submit" value="Wyślij">
</form>
</body>
</html>
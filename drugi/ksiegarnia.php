<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pobieranie danych z bazy</title>
</head>
<body>
<?php
if ($db_lnk = mysqli_connect("localhost", "root", "", "ksiegarnia")){
//Udało się nawiązać połączenie z bazą
$query = 'SELECT * FROM Ksiazki';
if($result = mysqli_query($db_lnk, $query)){
//Udało się wykonać zapytanie
?>
<table>
<tr>
<th>Id</th>
<th>Tytuł</th>
<th>Rok wydania</th>
<th>Cena</th>
</tr>
<?php
//Odczytanie wyników zapytania i umieszczenie ich w tabeli
while($row = mysqli_fetch_row($result)){
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
?>
</table>
<?php
}
else{
//Wystąpił błąd przy wykonywaniu zapytania
?>
<p>Wystąpił błąd: nieprawidłowe zapytanie...'</p>
<?php
}
mysqli_close($db_lnk);
}
else{
//Wystąpił błąd przy próbie połączenia z bazą (serwerem MySQL)
?>
<p>Wystąpił błąd podczas próby połączenia z serwerem MySQL...'</p>
<?php
}
?>
</body>
</html>
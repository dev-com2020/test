<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dodawanie danych do bazy</title>
</head>
<body>
<?php
if ($db_lnk = mysqli_connect("localhost", "root", "", "ksiegarnia")){
//Udało się nawiązać połączenie z bazą.
$query = "INSERT INTO Autorzy VALUES(";
$query .= "7, 'Zbigniew Nienacki'";
$query .= ")";
if(mysqli_query($db_lnk, $query)){
//Udało się wykonać zapytanie.
$rowsNo = mysqli_affected_rows($db_lnk);
echo "Liczba dodanych rekordów: $rowsNo";
}
else{
//Wystąpił błąd przy wykonywaniu zapytania.
echo 'Wystąpił błąd: nie dodano nowych danych...';
}
mysqli_close($db_lnk);
}
else{
//Wystąpił błąd przy próbie połączenia z bazą (serwerem MySQL).
echo 'Wystąpił błąd podczas próby połączenia z serwerem MySQL...';
}
?>
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css">
<title>Dodawanie autora do bazy</title>
</head>
<body>
<div>
<form action="dodaj.php" method="post">
<div>
<label for="nazwa">Imię i nazwisko</label>
<input type="text" id="nazwa" name="nazwa"
placeholder="np. Jan Kowalski">
</div>
<div>
<label for="id">Id</label>
<input type="text" id="id" name="id"
placeholder="np. 12">
</div>
<button type="submit">Dodaj</button>
</form>
</div>
</body>
</html>
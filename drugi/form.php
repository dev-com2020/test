<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Logowanie</title>
</head>
<body>
<div>
<div style="font-size:16pt">
<?php
if(isset($_SESSION['komunikat'])){
echo $_SESSION['komunikat'];
}
else {
echo "Wprowadź nazwę i hasło użytkownika:";
}
?>
</div>
<form action = "http://localhost/test/drugi/login.php"
method = "POST">
<table>
<tr>
<td>Użytkownik:</td>
<td>
<input type="text" name="user">
</td>
</tr><tr>
<td>Hasło:</td>
<td>
<input type="password" name="haslo">
</td>
</tr><tr>
<td colspan="2" style="text-align:center">
<input type="submit" value="Zaloguj">
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
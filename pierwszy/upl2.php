<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wysyłanie kilku plików</title>
</head>
<body>
<form name = "formularz1"
enctype = "multipart/form-data"
action = "http://localhost/test/skrypt4.php"
method = "POST">
Wskaż pliki do wysłania:
<br><br>
<input type = "file" name = "pliki[]">
<input type = "file" name = "pliki[]">
<input type = "file" name = "pliki[]">
<br><br>
<input type = "submit"
name = "btnWyslij"
value = "Wyślij pliki">
</form>
</body>
</html>
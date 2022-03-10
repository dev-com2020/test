<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wysyłanie pliku</title>
</head>
<body>
<form name = "formularz1"
enctype = "multipart/form-data"
action = "http://localhost/test/skrypt3.php"
method = "POST">
Nazwa pliku:
<input type = "file"
name = "plik1">
<input type = "submit"
name = "btnWyslij"
value = "Wyślij plik">
</form>
</body>
</html>
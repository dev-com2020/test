<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Korzystanie z sesji</title>
</head>
<body>
Witamy na drugiej stronie sesji.<br>
Trwa sesja o identyfikatorze: <?php echo session_id() ?><br>
Wartością zmiennej zmienna_sesji jest:
<?php echo $_SESSION['zmienna_sesji'] ?><br>
<a href="index3.php">Następna strona</a>
</body>
</html>
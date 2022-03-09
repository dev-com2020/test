<?php
session_start();
$_SESSION['zmienna_sesji'] = "abcd";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Korzystanie z sesji</title>
</head>
<body>
Witamy na stronie. Została rozpoczęta sesja.<br>
Identyfikatorem sesji jest: <?php echo session_id() ?> <br>
Została ustawiona zmienna o nazwie: zmienna_sesji <br>
Wartością zmiennej zmienna_sesji jest:
<?php echo $_SESSION['zmienna_sesji'] ?><br>
<a href="index2.php">Następna strona</a>
</body>
</html>
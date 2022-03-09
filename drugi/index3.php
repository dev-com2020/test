<?php
session_start();
unset($_SESSION['zmienna_sesji']);
if (isset($_COOKIE[session_name()])){
setcookie(session_name(), '', time() - 3600);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Korzystanie z sesji</title>
</head>
<body>
Witamy na trzeciej stronie sesji.<br>
Identyfikatorem sesji jest: <?php echo session_id() ?> <br>
Została usunięta zmienna o nazwie: zmienna_sesji <br>
Wartością zmiennej zmienna_sesji jest:
<?php
echo $_SESSION['zmienna_sesji'] . "<br>";
if(session_destroy()){
echo "Sesja została zakończona.";
}
else{
echo "Próba zakończenia sesji nie powiodła się.";
}
?>
</body>
</html>
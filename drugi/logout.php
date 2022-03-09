<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
$komunikat = "Nie jesteś zalogowany!";
}
else{
$komunikat = "Wylogowanie prawidłowe!";
}
$_SESSION = array();
setcookie(session_name(), '', time() - 3600);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Wylogowanie</title>
</head>
<body>
<?php echo $komunikat; ?>
<br><br>
<a href="login.php">Powrót do strony logowania</a>
</body>
</html>
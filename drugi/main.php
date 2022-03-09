<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
$_SESSION['komunikat'] = "Nie jesteś zalogowany!";
header("Location: login.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Główna część serwisu</title>
</head>
<body>
Jesteś zalogowany jako: <?php echo $_SESSION['zalogowany']; ?>
<br>
Pamiętaj o wylogowaniu przed opuszczeniem strony!
<br>
<br>
<a href="logout.php">Wylogowanie</a>
</body>
</html>
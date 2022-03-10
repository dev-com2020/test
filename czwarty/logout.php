<?php
  session_start();
  if(!isset($_SESSION['zalogowany'])){
    $komunikat = "Nie jesteś zalogowany!";
  }
  else{
    unset($_SESSION['zalogowany']);
    $komunikat = "Wylogowanie prawidłowe!";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wylogowanie</title>
  </head>
  <body>
    <p><?=$komunikat?></p>
    <p><a href="login.php">Powrót do strony logowania</a></p>
  </body>
</html>
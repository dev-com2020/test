<?php
  session_start();
  if(!isset($_SESSION['page2hits'])){
    $_SESSION['page2hits'] = 1;
  }
  else{
    $_SESSION['page2hits']++;
  }
  if(!isset($_SESSION['page1hits'])){
    $_SESSION['page1hits'] = 0;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Śledzenie użytkownika</title>
  </head>
  <body>
    <p>Liczba wizyt na drugiej stronie: 
    <?php echo $_SESSION['page2hits']; ?>
    </p>
    <p>Liczba wizyt na pierwszej stronie:
    <?php echo $_SESSION['page1hits']; ?>
    </p>
    <a href="index4.php">Pierwsza strona</a>
  </body>
</html>
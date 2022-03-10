<?php
  if(isset($_SESSION['komunikat'])){
    $komunikat = $_SESSION['komunikat'];
    unset($_SESSION['komunikat']);
  }
  else{
    $komunikat = "Wprowadź nazwę i hasło użytkownika:";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logowanie</title>
  </head>
  <body>
    <div>
      <div style="font-size:16pt">
        <?=$komunikat?>
      </div>
      <form action = "http://localhost/login.php"
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
            <td>
              <a href="new_user_form.php">Rejestracja</a>
            </td>
            <td style="text-align:right;">
              <input type="submit" value="Wejdź">
            </td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>

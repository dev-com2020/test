<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pobieranie danych z bazy</title>
  </head>
  <body>

    <?php
      $dsn = "mysql:host=localhost;dbname=ksiegarnia";
      $uzytkownik = "root";
      $haslo = "";

      try{
        $dbo = new PDO($dsn, $uzytkownik, $haslo);
      }
      catch (PDOException $e){
        //Wystąpił błąd przy próbie połączenia z bazą (serwerem MySQL).
        echo '<p>Błąd podczas otwierania połączenia: ' . 
             $e->getMessage() . '</p>';
        echo '</body></html>';
        exit;
      }
        
      $query = 'SELECT * FROM Ksiazki';
        
      if($result = $dbo->query($query)){
        //Udało się wykonać zapytanie.
    ?>

    <table>
      <tr>
        <th>Id</th>
        <th>Tytuł</th>
        <th>Rok wydania</th>
        <th>Cena</th>
      </tr>

    <?php
      //Odczytanie wyników zapytania i umieszczenie ich w tabeli
      while($row = $result->fetch(PDO::FETCH_NUM)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[6]</td>";
        echo "</tr>";
      }
    ?>

    </table>

    <?php
    }
    else{
      //Wystąpił błąd przy wykonywaniu zapytania.
      echo 'Wystąpił błąd: nieprawidłowe zapytanie...';
    }
    $dbo = null;
    ?>

  </body>
</html>
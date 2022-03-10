<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pobieranie danych z bazy</title>
  </head>
  <body>

  <?php
  if ($db_lnk = mysqli_connect("localhost", "root", "", "ksiegarnia")){
    //Udało się nawiązać połączenie z bazą.
  
    //Domyślna kolumna sortująca
    $sort = 'Id';

    //Odczytanie wartości parametru sortId i ustalenie
    //kolumny, względem której ma się odbyć sortowanie.

    if(isset($_GET['sortId'])){
      switch($_GET['sortId']){
        case 2 : $sort = 'Tytuł'; break;
        case 4 : $sort = 'Rok wydania'; break;
        case 6 : $sort = 'Cena'; break;
      }
    }
    
    //Konstrukcja zapytania
    $query = 'SELECT * FROM Ksiazki ORDER BY `'. $sort. '`';

    
    if($result = mysqli_query($db_lnk, $query)){
      //udało się wykonać zapytanie
  ?>

  <table>
    <tr>
      <th><a href="ksiegarnia2.php?sortId=0">Id</a></th>
      <th><a href="ksiegarnia2.php?sortId=2">Tytuł</a></th>
      <th><a href="ksiegarnia2.php?sortId=4">Rok wydania</a></th>
      <th><a href="ksiegarnia2.php?sortId=6">Cena</a></th>
    </tr>

    <?php
      //Odczytanie wyników zapytania i umieszczenie ich w tabeli
      $count = mysqli_num_rows($result);
      for($i = 0; $i < $count; $i++){
        $row = mysqli_fetch_row($result);
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
      //wystąpił błąd przy wykonywaniu zapytania
  ?>
      <p>Wystąpił błąd: nieprawidłowe zapytanie...'</p>
  <?php
    }
    mysqli_close($db_lnk);
  }
  else{
    //wystąpił błąd przy próbie połączenia z bazą (serwerem MySQL)
  ?>
    <p>Wystąpił błąd podczas próby połączenia z serwerem MySQL...'</p>
  <?php
  }
  ?>
  </body>
</html>

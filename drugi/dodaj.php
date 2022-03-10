<?php
session_start();
include 'komunikaty.php';

function addToDBTable($baza, $tabela, $kolumny, $wartosci){
  if ($db_lnk = mysqli_connect("localhost", "root", "", $baza)){
    //Udało się nawiązać połączenie z bazą.
    
    //Zabezpieczenie znaków specjalnych.
    foreach ($wartosci as $key => $val){
      $wartosci[$key] = mysqli_real_escape_string($db_lnk, $val);
    }
  
    //Utworzenie zapytania
    $query = "INSERT INTO `$tabela` (`". implode("`, `", $kolumny) ."`)";
    $query .= " VALUES('" . implode("', '", $wartosci) . "')";
    
    //Próba wykonania zapytania
    if($result = mysqli_query($db_lnk, $query)){
      //Udało się wykonać zapytanie.
    
      $rowsNo = mysqli_affected_rows($db_lnk);
      addMessage("Zapytanie zostało wykonane.<br>" . 
                 "Liczba dodanych rekordów: $rowsNo");
    }
    else{
      //Wystąpił błąd przy wykonywaniu zapytania.
      addMessage('Wystąpił błąd. Dane nie zostały dodane do tabeli ' .
                  $tabela);
    }
    mysqli_close($db_lnk);
  }
  else{
    //Wystąpił błąd przy próbie połączenia z bazą (serwerem MySQL).
    addMessage('Wystąpił błąd podczas próby połączenia z serwerem...');
  }
}

//Sprawdzenie, czy są dostępne parametry oraz wywołanie funkcji dodającej dane.
if(isset($_POST['nazwa']) && 
   isset($_POST['id']) && $_POST['nazwa'] != ''){
  $id = strval(intval($_POST['id']));
  $nazwa = $_POST['nazwa'];
  addToDBTable(
    'ksiegarnia',
    'Autorzy',
    array('Id', 'Nazwa'),
    array($id, $nazwa)
  );
}
else{
  addMessage('Niepoprawne dane!');
}
header('Location:wynik.php');
?>
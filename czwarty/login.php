<?php
  //Rozpoczęcie sesji
  session_start();
  
  //Dane dostępowe do serwera bazy danych
  $host = 'localhost';
  $baza = 'testphp';
  $uzytkownik = "root";
  $haslo = "";

  //Funkcja logująca
  function checkPass($user, $pass)
  {
    //Umożliwienie odwołań do zmiennych globalnych
    global $host, $baza, $uzytkownik, $haslo;
    

    //Sprawdzenie długości przekazanych ciągów
      
    //Dla kodowania jednobajtowego
    //$userNameLength = strlen($user);
    //$userPassLength = strlen($pass);
    
    //Dla kodowania utf-8 (1)
    //$userNameLength = strlen(utf8_decode($user));
    //$userPassLength = strlen(utf8_decode($pass));
    
    //Dla kodowania utf-8 (2)
    $userNameLength = mb_strlen($user, 'UTF-8');
    $userPassLength = mb_strlen($pass, 'UTF-8');

    if($userNameLength < 3 || $userNameLength > 20 ||
       $userPassLength < 6 || $userPassLength > 40){
      return 2;
    }
    
    //Nawiązanie połączenia z serwerem MySQL
    $db_obj = new mysqli($host, $uzytkownik, $haslo, $baza);
    if($db_obj->connect_errno){
      //echo 'Wystąpił błąd podczas próby połączenia z serwerem MySQL...';
      //echo $db_obj->connect_error;
      return 1;
    }

    //Zabezpieczenie znaków specjalnych w parametrach
    $user = $db_obj->real_escape_string($user);
    $pass = $db_obj->real_escape_string($pass);
    
    //Wykonanie zapytania sprawdzającego poprawność danych
    $query = "SELECT Haslo FROM Users WHERE Nazwa='$user' ";

    if(!$result = $db_obj->query($query)){
      //echo 'Wystąpił błąd: nieprawidłowe zapytanie...';
      $db_obj->close();
      return 1;
    }

    //Sprawdzenie wyników zapytania
    if($result->num_rows <> 1){
      //Brak użytkownika o wskazanej nazwie lub zbyt wiele wyników
      $result = 2;
    }
    else{
      $row = $result->fetch_row();
      $pass_db = $row[0];
      //Wersja testowa bez kodowania haseł
      //if($pass != $pass_db){
      //Wersja docelowa z kodowaniem haseł
      if(crypt($pass, $pass_db) != $pass_db){
        $result = 2;
      }
      else{
        $result =  0;
      }
    }

    //Zamknięcie połączenia z bazą i zwrócenie wyniku
    $db_obj->close();
    return $result;
  }

  //Rozpoczęcie procedur weryfikacji danych i logowania
  
  //Użytkownik jest zalogowany
  if(isset($_SESSION['zalogowany'])){
    header("Location: main.php");
  }
  //Użytkownik niezalogowany i brak parametru haslo lub user.
  else if(!isset($_POST["haslo"]) || !isset($_POST["user"])){
    if(!isset($_SESSION['komunikat'])){
      $_SESSION['komunikat'] = "Wprowadź nazwę i hasło użytkownika:";
    }
    include('form.php');
  }
  //Użytkownik niezalogowany i ustawione parametry haslo i user
  else{
    $val = checkPass($_POST["user"], $_POST["haslo"]);
    if($val == 0){
      //Logowanie poprawne
      $_SESSION['zalogowany'] = $_POST["user"];
      header("Location: main.php");
    }
    else if($val == 1){
      //Błąd serwera
      $_SESSION['komunikat'] = "Błąd serwera. Zalogowanie nie było możliwe.";
      header("Location: login.php");
    }
    else if($val == 2){
      //Niepoprawne dane logowania
      $_SESSION['komunikat'] = "Nieprawidłowa nazwa lub hasło użytkownika.";
      header("Location: login.php");
    }
    else{
      //Błąd systemu logowania, nieprawidłowa wartość zwrócona przez checkPass
      $_SESSION['komunikat'] = "Błąd serwera. Zalogowanie nie było możliwe.";
      header("Location: login.php");
    }
  }
?>

<?php
$host = 'localhost';
$baza = 'testphp';
$uzytkownik = "root";
$haslo = "";

function checkPass($user, $pass)
{
  //Umożliwienie odwołań do zmiennych globalnych.
  global $host, $baza, $uzytkownik, $haslo;
  
  //Sprawdzenie długości przekazanych ciągów.
  //Dla kodowania jednobajtowego
  //$userNameLength = strlen($user);
  //$userPassLength = strlen($pass);
  //Dla kodowania utf-8
  $userNameLength = strlen(utf8_decode($user));
  $userPassLength = strlen(utf8_decode($pass));

  if($userNameLength < 3 || $userNameLength > 20 ||
     $userPassLength < 6 || $userPassLength > 40){
    return 2;
  }
  
  //Nawiązanie połączenia serwerem MySQL.
  $db_obj = new mysqli($host, $uzytkownik, $haslo, $baza);
  if($db_obj->connect_errno){
    //echo 'Wystąpił błąd podczas próby połączenia z serwerem MySQL...';
    //echo $db_obj->connect_error;
    return 1;
  }

  //Zabezpieczenie znaków specjalnych w parametrach.
  $user = $db_obj->real_escape_string($user);
  $pass = $db_obj->real_escape_string($pass);
  
  //Wykonanie zapytania sprawdzającego poprawność danych.
  $query = "SELECT COUNT(*) FROM Users WHERE Nazwa='$user' ";
  $query .= "AND Haslo='$pass'";

  if(!$result = $db_obj->query($query)){
    //echo 'Wystąpił błąd: nieprawidłowe zapytanie...';
    $db_obj->close();
    return 1;
  }

  //Sprawdzenie wyników zapytania.
  if(($row = $result->fetch_row()) == null){
    //echo 'Wystąpił błąd: nieprawidłowe wyniki zapytania...';
    return 1;
  }
  else{
    if($row[0] <> 1){
      $result = 2;
    }
    else{
      $result =  0;
    }
  }

  //Zamknięcie połączenia z bazą i zwrócenie wyniku.
  $db_obj->close();
  return $result;
}

if(!isset($_POST["haslo"]) || !isset($_POST["user"])){
  include('login.html');
  exit();
}

$val = checkPass($_POST["user"], $_POST["haslo"]);
switch($val){
  case 0 : include('./index1.html');break;
  case 1 : include('./error_server.html');break;
  case 2 : include('./bad_login.html');break;
  default : include('./error_server.html');
}
?>

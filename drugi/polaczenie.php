<?php
// if (!$db_lnk = mysqli_connect("localhost", "root", "", "ksiegarnia")){
// echo 'Błąd podczas próby połączenia z serwerem MySQL...<br>';
// exit;
// }
// else{
// echo 'Połączenie z bazą danych zostało nawiązane...<br>';
// }
// //Tutaj instrukcje wykonujące operacje na bazie danych

// if(!mysqli_close($db_lnk)){
// echo 'Błąd podczas zamykania połączenia z serwerem MySQL...<br>';
// }
// else{
// echo 'Połączenie z serwerem MySQL zostało zamknięte...<br>';
// }

$db_obj = mysqli_connect("localhost", "root", "", "ksiegarnia");
if($db_obj->connect_errno){
    echo 'Błąd podczas próby połączenia z serwerem MySQL...<br>';
    echo 'Komunikat: ' . $db_obj->connect_error;
    exit;
    }
    else{
    echo 'Połączenie z bazą danych zostało nawiązane...<br>';
    }
    //Tutaj instrukcje wykonujące operacje na bazie danych
    if($db_obj->close()){
    echo 'Połączenie z serwerem MySQL zostało zamknięte...<br>';
    }
    else{
    echo 'Błąd podczas zamykania połączenia z serwerem MySQL...<br>';
    }

?>

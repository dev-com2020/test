<?php
if (!$db_lnk = mysqli_connect("localhost", "php", "test", "testphp")){
echo 'Błąd podczas próby połączenia z serwerem MySQL...<br>';
exit;
}
else{
echo 'Połączenie z bazą danych zostało nawiązane...<br>';
}
//Tutaj instrukcje wykonujące operacje na bazie danych
if(!mysqli_close($db_lnk)){
echo 'Błąd podczas zamykania połączenia z serwerem MySQL...<br>';
}
else{
echo 'Połączenie z serwerem MySQL zostało zamknięte...<br>';
}
?>
<?php
function getCounter()
{
if(!file_exists('/var/wwwdata/licznik.txt')){
//Brak pliku licznika
return false;
}
if(!$fd = fopen('/var/wwwdata/licznik.txt', "r+")){
//Brak dostępu do pliku licznika
return false;
}
if(!flock($fd, LOCK_EX)){
//Nie uzyskano blokady
fclose($fd);
return false;
}
$count = fgets($fd);
if(is_numeric($count)){
$result = (int) ($count + 1);
fseek($fd, 0);
fputs($fd, $result);
}
else{
//Nieprawidłowy format odczytanych danych
$result = false;
}
flock($fd, LOCK_UN);
fclose($fd);
return $result;
}
?>
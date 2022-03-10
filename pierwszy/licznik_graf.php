<?php
function getCounter()
{
if(!file_exists('/var/wwwdata/licznik.txt')){
//Brak pliku licznika
return false;
}
$count = fgets($fd);
if(is_numeric($count)){
$count = (int) ($count + 1);
fseek($fd, 0);
fputs($fd, $count);
}
else{
//Nieprawidłowy format odczytanych danych
$count = false;
}
flock($fd, LOCK_UN);
fclose($fd);
if($count === false){
return false;
}
$imgStr = "";
$count = strval($count);
$strLength = strlen($count);
for($i = 0; $i < $strLength; $i++){
$temp = "{$count[$i]}" . '.jpg';
$imgStr .= "<img src='$temp' alt='{$count[$i]}'>";
}
return $imgStr;
}
?>
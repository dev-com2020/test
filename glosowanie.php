<?php
$datafile = "./colors.txt";

function vote($vote)
{
global $datafile;
if($vote == ""){
//echo "Nie został zaznaczony żaden z kolorów.";
return false;
}
if(file_exists($datafile)){
if(($fd = fopen($datafile, "r+")) === false){
//echo "Błąd serwera. Głos nie został uwzględniony.";
return false;
}
} else {
if(($fd = fopen($datafile, "w+")) === false){
//echo "Błąd serwera. Głos nie został uwzględniony.";
return false;
}
}
$czerwony = intval(fgets($fd));
$zielony = intval(fgets($fd));
$niebieski = intval(fgets($fd));
$fioletowy = intval(fgets($fd));
$czarny = intval(fgets($fd));
$inny = intval(fgets($fd));

switch($vote){
case "czerwony" : $czerwony++; break;
case "zielony" : $zielony++; break;
case "niebieski" : $niebieski++; break;
case "fioletowy" : $fioletowy++; break;
case "czarny" : $czarny++; break;
default : $inny++;
}

flock($fd, LOCK_EX);
fseek($fd, 0);
ftruncate($fd, 0);
fputs($fd, $czerwony.PHP_EOL);
fputs($fd, $zielony.PHP_EOL);
fputs($fd, $niebieski.PHP_EOL);
fputs($fd, $fioletowy.PHP_EOL);
fputs($fd, $czarny.PHP_EOL);
fputs($fd, $inny.PHP_EOL);
flock($fd, LOCK_UN);
fclose($fd);
return true;
}


if(isset($_POST['vote'])){
    if(vote($_POST['vote'])){
    header('Location:wyniki.php');
    } else {
    header('Location:blad.html');
    }
    } else {
    header('Location:blad.html');
    }
    ?>
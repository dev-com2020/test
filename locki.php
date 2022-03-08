<?php
if(!$fd = fopen('nazwa_pliku', 'tryb_otwarcia')){
echo "Nie mogę otworzyć pliku test.txt.";
}
else{
if(!flock($fd, LOCK_EX)){
echo "Nie mogę założyć blokady pliku nazwa_pliku.";
}
else{
//
//Operacje na pliku
//
}
if(!flock($fd, LOCK_UN)){
echo "Nie mogę zdjąć blokady pliku test.txt.";
}
fclose($fd);
}
?>
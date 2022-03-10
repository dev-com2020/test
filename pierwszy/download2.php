<?php
$filesPath = "./";
function checkFileName($name, $path)
{
$fd = opendir($path);
if(!$fd) return false;
$result = false;
while (($file = readdir($fd)) !== false){
if(is_dir($path.$file)) continue;
if($file == $name){
$result = true;
break;
}
}
closedir($fd);
return $result;
}
function send($fileName, $filePath)
{
    if(!file_exists($filePath.$fileName)){
        echo 'Nie ma takiego pliku na serwerze!';
        return;
}
}
if(isSet($_GET['name'])){
if(!checkFileName($_GET['name'], $filesPath)){
echo 'Nie ma takiego pliku na serwerze!';
}
else{
send($_GET['name'], $filesPath);
}
}
else{
echo 'Nie ma takiego pliku na serwerze!';
}
?>
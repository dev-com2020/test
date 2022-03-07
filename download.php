<?php
$filesPath = "./";
function checkFileName($name)
{
$files = array
(
"test.csv",
"plik1.zip",
"plik2.zip",
//i kolejne inne nazwy plików
);

return in_array($name, $files);
}

function send($fileName, $filePath)
{
if(!file_exists($filePath.$fileName)){
echo 'Nie ma takiego pliku na serwerze!';
return;
}

$fd = fopen($filePath.$fileName,"r");
$size = filesize($filePath.$fileName);
$contents = fread($fd, filesize($filePath.$fileName));
fclose($fd);

header("Content-Type: application/octet-stream");
header("Content-Length: $size;");
header("Content-Disposition: attachment; filename=$fileName");
echo $contents;
}
if(isset($_GET['name'])){
if(!checkFileName($_GET['name'])){
echo 'Nie ma takiego pliku na serwerze!';
} else {
send($_GET['name'], $filesPath);
}
} else {
echo 'Nie ma takiego pliku na serwerze!';
}
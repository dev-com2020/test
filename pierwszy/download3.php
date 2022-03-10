<?php
function send($id)
{
if(!($fd = fopen("downloads.txt","r"))){
header("Location: 404.html");
return;
}
$found = false;
while (!feof ($fd)){
$line = trim(fgets($fd));
$arr = explode(";", $line);
if(count($arr) == 4){
if($id === $arr[0]){
$found = true;
$path = $arr[2];
$name = $arr[1];
break;
}
}
}
if((!$found) || (!file_exists($path.$name))){
header("Location: 404.html");
return;
}
$fd = fopen($path.$name, "r");
$size = filesize($path.$name);
$contents = fread($fd, $size);
fclose($fd);
header("Content-Type: application/octet-stream");
header("Content-Length: $size;");
header("Content-Disposition: attachment; filename=$name");
echo $contents;
}
if(isset($_GET['fileid'])){
send($_GET['fileid']);
}
else{
header("Location: 404.html");
}
?>
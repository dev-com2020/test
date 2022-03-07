<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista plików do pobrania</title>
</head>
<body>
<?php
$filesPath = "./";
function printList($path)
{
$fd = opendir($path);

if(!$fd) return false;
    while (($file = readdir($fd)) !== false){
if(is_dir($path.$file)) continue;
    echo "<a href=\"http://localhost/test/download2.php?name=";
    echo "$file\">$file</a><br>";
}
closedir($fd);
}
printList($filesPath);
?>
</body>
</html>
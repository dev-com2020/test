<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista plików do pobrania</title>
</head>
<body>
<ol>
<?php
function printList()
{
if(!($fd = fopen("./downloads.txt", "r"))){
return;
}
while (!feof ($fd)){
$line = trim(fgets($fd));
$arr = explode(";", $line);
if(count($arr) == 4){
echo "<li> <a href='download3.php?fileid=$arr[0]" .
"'>$arr[3] ($arr[1])</a></li>";
}
}
}
printList();
?>
</ol>
</body>
</html>
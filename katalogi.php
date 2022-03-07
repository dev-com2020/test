<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="windows-1250">
<title>Zawartość wybranego katalogu</title>
</head>
<body>
<ul>
<?php
$dir = "./";
if(!($fd = opendir($dir))){
exit("Nie mogę otworzyć katalogu $dir!");
}
while (($plik = readdir($fd)) !== false){
echo "<li>$plik</li>";
}
closedir($fd);
?>
</ul>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html>
<head>
<meta charset="windows-1250">
<title>Zawartość wybranego katalogu</title>
</head>
<body>
<ul>
<?php
$dir = "./";
$pliki = scandir("$dir");
foreach($pliki as $plik){
echo "<li>$plik</li>";
}
?>
</ul>
</body>
</html> -->

<ul>
<?php
$dir = "./";
$pliki = scandir("$dir");
echo "<li>";
echo implode("</li><li>", $pliki);
echo "</li>";
?>
</ul>
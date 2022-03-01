<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lista plików</title>
</head>
<body>
<?php
$pliki = `dir`; //Dla Windows
$pliki = htmlspecialchars($pliki, ENT_IGNORE, ""); //Dla Windows
echo "<pre>";
echo $pliki;
echo "</pre>";
?>
</body>
</html>
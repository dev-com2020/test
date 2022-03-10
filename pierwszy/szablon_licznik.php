<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Licznik odwiedzin</title>
</head>
<body>
<div style='text-align:center;'>
Treść witryny
</div>
<p style='text-align:center;'>
Liczba odwiedzin strony od 20 czerwca 2018 roku:
<?php
include 'counter.php';
if(($ile = getCounter()) !== false){
echo $ile;
}
else{
echo 'nieznana';
}
?>
</p>
</body>
</html>
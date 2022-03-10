<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Opinie</title>
</head>
<body>
<body>
<div>
<b>Wyraź swoją opinię</b>
<br>
<form method="post" action="http://localhost/test/dodaj.php">
<textarea rows="5" cols="20" name="opinia"></textarea>
<br>
<input type="submit" value="Dodaj">
</form>
<p>Dotychczasowe opinie:<p>
<?php
if(file_exists("./opinie.txt")){
$str = file_get_contents('./opinie.txt');
$str = strip_tags($str);
$str = nl2br($str);
echo $str;
}
?>
</div>
</body>
</html>
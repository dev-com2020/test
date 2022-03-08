<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dodanie opinii</title>
</head>
<body>
<body>
<?php
if(!isset($_POST["opinia"]) || $_POST["opinia"] == ""){
exit("Opinia nie została przesłana.");
}
$str = substr($_POST['opinia'], 0, 255);
$str = strip_tags($str);
if(file_put_contents("./opinie.txt", "$str\n", FILE_APPEND) === false){
echo "Błąd serwera. Opinia nie została zapisana.";
}
else{
echo "Dziękujemy za przesłanie opinii.";
}
?>
</body>
</html>
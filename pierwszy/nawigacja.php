<!DOCTYPE html>
<html>
<head>
<meta charset="Windows-1250">
<title>Nawigacja po katalogach</title>
</head>
<body>
<div>
<?php

function listDir($dir){
    if(!is_dir($dir) || !chdir($dir)){
    echo "Brak uprawnień...";
    return;
    }
    $dir = getcwd();
    if(!$fd = opendir($dir)){
    echo "Brak uprawnień...";
    return;
    }
    $dir = str_replace("\\", "/", $dir);
    if(($count = strlen($dir)) > 0){
    if($dir[$count - 1] == '/'){
    $dir = substr($dir, 0, $count - 1);
    }
    }
    while (($file = readdir($fd)) !== false){
    if($file == ".") continue;
    if(is_dir($dir."/".$file)){
    $path = urlencode($dir."/".$file);
    $link = "<a href=\"nawigacja.php?";
    $link .= "dir=$path\">$file</a>\n";
    echo $link;
    }
    else{
    echo $file;
    }
    echo "<br>";
    }
    closedir($fd);
    }
    if(isset($_GET['dir'])){
    $dir = $_GET['dir'];
    }
    else{
    $dir = "/";
    }
    if($dir == '') $dir = "/";

    listDir($dir);
?>
</div>
</body>
</html>
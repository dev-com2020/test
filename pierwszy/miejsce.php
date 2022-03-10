<?php
function getDirSize($dir)
{
$count = 0;
if(!$fd = opendir($dir))
return 0;
while (($file = readdir($fd)) !== false){
if($file == "." || $file == "..") continue;
if(is_dir($dir.DIRECTORY_SEPARATOR.$file)){
    $count += getDirSize($dir.DIRECTORY_SEPARATOR.$file);
    }
    else if(is_file($dir.DIRECTORY_SEPARATOR.$file))
    $count += filesize($dir.DIRECTORY_SEPARATOR.$file);
    }
    closedir($fd);
    return $count;
    }

getDirSize("c:\\")


function delDir($dir)
{
if(!$fd = opendir($dir))
return false;
while (($file = readdir($fd)) !== false){
if($file == "." || $file == "..") continue;
if(is_dir($dir.DIRECTORY_SEPARATOR.$file)){
delDir($dir.DIRECTORY_SEPARATOR.$file);
rmdir($dir.DIRECTORY_SEPARATOR.$file);
}
else if(is_file($dir.DIRECTORY_SEPARATOR.$file)){
unlink($dir.DIRECTORY_SEPARATOR.$file);
}
}
closedir($fd);
}
?>

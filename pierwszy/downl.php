<?php
$filePath = "./";
$fileNameServer = "test.csv";
$fileNameBrowser = "pobrany.csv";
$fd = fopen($filePath.$fileNameServer, "r");
$size = filesize($filePath.$fileNameServer);
$contents = fread($fd, $size);
fclose($fd);
header("Content-Type: application/octet-stream");
header("Content-Length: $size;");
header("Content-Disposition: attachment; filename=$fileNameBrowser");
echo $contents;
?>
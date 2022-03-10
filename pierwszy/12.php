<!-- 
    while (wyrażenie warunkowe){
instrukcje;
} -->

<?php
$i = 0;
while($i++ < 10){
    echo "Pętla while [i = $i]";
    echo "<br>";
    
}

$i = 0;
do{
    echo "Pętla do...while [i = $i]";
    echo "<br>";
    $i++;
}
while($i < 0);
?>

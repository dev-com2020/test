<?php
function ladujeKlasy($nazwaKlasy){
    require "$nazwaKlasy.php";
}

spl_autoload_register('ladujeKlasy');
$obj = new MojaKlasa();



function __autoload($nazwaKlasy){
    require "$nazwaKlasy.php";
    }
    $obj = new MojaKlasa();
?>
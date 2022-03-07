<?php

// try {
//     throw new Exception();
// } catch (Exception $e) {
//     echo "Został wygenerowany wyjątek! :)";    
// }


// try {
//     throw new Exception("Testowy wyjątek", 2021);
// } catch (Exception $e) {
//     echo "Został wygenerowany wyjątek! :)<br>";
//     echo "Treść komunikatu: ". $e->getMessage() . "<br>";
//     echo "Treść nazwa pliku: ". $e->getFile() . "<br>";
//     echo "Treść numer linii: ". $e->getLine() . "<br>";
//     echo "Treść kod błędu: ". $e->getCode() . "<br>";  
// }

// niepoprawnie!
try{
    throw new OutOfRangeException();
    }
    catch(Exception $e){
    echo "Został wykonany blok dla wyjątku Exception.";
    }
    catch(OutOfRangeException $e){
    echo "Został wykonany blok dla wyjątku OutOfRangeException.";
    }



// poprawnie!
try{
    throw new OutOfRangeException();
    }
    catch(OutOfRangeException $e){
        echo "Został wykonany blok dla wyjątku OutOfRangeException.";
        }
    catch(Exception $e){
    echo "Został wykonany blok dla wyjątku Exception.";
    }
    



?>
<?php
function addMessage($message){
$_SESSION['komunikat'] = $message;
}
function getMessage(){
if(isset($_SESSION['komunikat'])){
$komunikat = $_SESSION['komunikat'];
unset($_SESSION['komunikat']);
return $komunikat;
} else {
return false;
}
}
?>
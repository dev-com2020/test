<?php
session_start();
include 'constants.php';
if(isset($_SESSION['komunikat']) && isset($_SESSION['kod'])){
$komunikat = $_SESSION['komunikat'];
$kod = $_SESSION['kod'];
unset($_SESSION['komunikat']);
unset($_SESSION['kod']);
}
else{
$komunikat = "Nieznany status rejestracji";
$kod = UNKNOWN_ERROR;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Rejestracja użytkownika</title>
</head>
<body>
<p><?php echo $komunikat; ?></p>
<?php if($kod == OK):?>
<p>Możesz się <a href='login.php'>zalogować</a>.</p>
<?php else:?>
<p>Powrót do
<a href='new_user_form.php'>formularza rejestracyjnego</a>.
</p>
<?php endif;?>
</body>
<html>
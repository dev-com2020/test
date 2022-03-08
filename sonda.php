<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sonda</title>
</head>
<body>
<div style="width:400px;">
<h2>Jaki jest Twój ulubiony kolor?</h2>
<form method="post" action="http://localhost/test/glosowanie.php">
<ul style="list-style-type:none;padding-left:0px;">
<li>
<input type="radio" name="vote" value="czerwony"> czerwony
</li>
<li>
<input type="radio" name="vote" value="zielony"> zielony
</li>
<li>
<input type="radio" name="vote" value="niebieski"> niebieski
</li>
<li>
<input type="radio" name="vote" value="fioletowy"> fioletowy
</li>
<li>
<input type="radio" name="vote" value="czarny"> czarny
</li>
</ul>
<input type="submit" value="Głosuj">
</form>
<a href="http://localhost/test/wyniki.php">
Zobacz wyniki
</a>
</div>
</body>
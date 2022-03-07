<?php
$str = "przykładowy CIĄG zNaKóW";
echo "Ciąg oryginalny: ";
echo $str;
echo "<br>Po użyciu funkcji strtolower: ";
echo strtolower($str);
echo "<br>Po użyciu funkcji strtoupper: ";
echo strtoupper($str);
echo "<br>Po użyciu funkcji ucfirst: ";
echo ucfirst($str);
echo "<br>Po użyciu funkcji ucwords: ";
echo ucwords($str);
?>
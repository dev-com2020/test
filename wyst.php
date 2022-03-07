<!-- <?php
$str1 = "abcdabcd";
$str2 = "ab";
if(strpos($str1, $str2) === false){
echo "Ciąg $str2 nie został znaleziony w ciągu $str1.";
}
else{
    echo "Ciąg $str2 został znaleziony w ciągu $str1.";
    }
    ?> -->

<!-- <?php
$arr1 = array("%imie1%", "%imie2%");
$arr2 = array("Ala", "Ola");
$arr3 = array("%imie1%", "ma", "kota.");
$str = str_replace($arr1, $arr2, "%imie1% ma kota. %imie2% ma psa.");
echo "$str <br>";
$str = str_replace($arr1, "Magda", "%imie1% ma kota. %imie2% ma psa.");
echo "$str <br>";
$str = str_replace("%imie1%", "Ela", $arr3);
foreach($str as $word) echo "$word ";
//lub
//echo implode(" ", $str);
?> -->

<?php
echo "substr_replace(\"123456\", \"abc\", 2, 2) = ";
$str = substr_replace("123456", "abc", 2, 2);
echo $str;
echo "<br>substr_replace(\"123456\", \"abc\", 2) = ";
$str = substr_replace("123456", "abc", 2);
echo $str;
echo "<br>substr_replace(\"123456\", \"abc\", -3, 2) = ";
$str = substr_replace("123456", "abc", -3, 2);
echo $str;
echo "<br>substr_replace(\"123456\", \"abc\", -3) = ";
$str = substr_replace("123456", "abc", -3);
echo $str;
echo "<br>substr_replace(\"123456\", \"abc\", 2, -3) = ";
$str = substr_replace("123456", "abc", 2, -3);
echo $str;
echo "<br>substr_replace(\"123456\", \"abc\", -5, -1) = ";
$str = substr_replace("123456", "abc", -5, -1);
echo $str;
?>
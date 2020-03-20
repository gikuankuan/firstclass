<?php

//宣告變數 單行註解

$a=1;
echo $a;
echo "<br>";
$a=2.1;
echo $a;

/*宣告一個常數
常數不可以被變更
多行註解跟單行註解的作法是不一樣~
*/

$studentInschool = "YA";


define("PI",3.14);
echo PI;
echo "<br>";
echo PI*3.1415927;

echo PI*10,"   ____  ",$studentInschool;
echo $studentInschool;
?>
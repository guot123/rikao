
<?php

$str = "student. a am I";
echo $str;
echo "<br>";
$arr = explode(" ",$str);//将字符串转数组
var_dump($arr);
echo "<br>";
$result = array_reverse($arr);//将数组反向输出

var_dump($result);
echo "<br>";
$str1 = implode(" ",$result);//将数组分割成字符串
echo $str1;
?>
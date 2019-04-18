
<?php

function choushu($sums){
    if (!$sums) {
        echo "输入一个数";
    }
    while ($sums%2==0) {
        $sums = $sums/2;
        echo "2";
    }
    while ($sums%3==0) {
        $sums = $sums/3;
        echo "3";
    }
    while($sums%5==0){
        $sums = $sums/5;
        echo "5";
    }
    if ($sums==1) {
        echo "<br>";
        echo "这是丑数";
    }else {
        echo "这不是丑数";
    }
    
}
choushu(26);
?>
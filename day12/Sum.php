<?php
class Sum
{
    public static function Sum1($sum2,$sum3){
        $arr = array($sum2);
        $arr1 = array($sum3);
        $sum = array_merge($arr,$arr1);
        return array_sum($sum);
    }
}

?>
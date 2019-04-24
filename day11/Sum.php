<?php

class Sum
{
    public static function Sum_Solution($n)
    {
        $sum = $n;
        $sum&&($sum+=self::Sum_Solution($n-1));
        return $sum;
    } 
}

?>
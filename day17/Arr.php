<?php
class All{
    public static function Arr($arr_A=[],$arr_B=[]){
        $arr_all = array_merge($arr_A,$arr_B);
        array_multisort($arr_all);
        return $arr_all;
    }
}

?>
<?php
class Math{
    public static function arr($str){
        
        $arr = explode(" ",$str);//将字符串转数组
        $result = array_reverse($arr);//将数组反向输出
        $str1 = implode(" ",$result);//将数组分割成字符串
        return $str1;
    }
}

?>
<?php
class Arr{
    public static function All($target,$array){
        $arr = $array;
        $tar = $target;
        if (array_key_exists("$tar",$arr)) {
            return true;
        }
    }
}

?>
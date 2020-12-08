<?php 
    function pass($str,$salt){
        return sha1(md5($str.'#'.$salt).'#'.$salt);
    }

    function GetRandStr($length = 6){
        //字符组合
        $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $len = strlen($str)-1;
        $randstr = '';
        for ($i=0;$i<$length;$i++) {
         $num=mt_rand(0,$len);
         $randstr .= $str[$num];
        }
        return $randstr;
    }
?>
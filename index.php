<?php
$APPLICATION->title = $_SERVER['REDIRECT_URL']=='/'?'Строим дом':str_replace('/',' ',$_SERVER['REDIRECT_URL']);
if($_SERVER['REDIRECT_URL'] == '/') {
    $rasemnar->july = 'rasem/mk';
    //include "rename.php";
    $rasemnar->jyyylmasy = opendir($rasemnar->july);
    while (false !== ($rasem = readdir($rasemnar->jyyylmasy))){
        if($rasem!='.'&& $rasem!='..')
            $suratlar[] = "/".$rasemnar->july."/".$rasem;
    }
    //echo '<pre>';print_r($suratlar);
}
include "bash.php";
include "menu.php";
include "urnak/toep.php";
include "ajaq.php";
?>
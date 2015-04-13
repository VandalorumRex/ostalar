<?php
//phpinfo(); exit;
$APPLICATION->title = $_SERVER['REDIRECT_URL']=='/'?'Строим дом':str_replace('/',' ',$_SERVER['REDIRECT_URL']);
$APPLICATION->tele = substr($_SERVER["HTTP_HOST"],0,3)=='tt.'?'tt':'ru';
if($_SERVER['REDIRECT_URL']='/' && $APPLICATION->tele='tt') $APPLICATION->title='Йорт төзибез';
//echo $APPLICATION->tele; exit;
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
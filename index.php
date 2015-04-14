<?php
//phpinfo(); exit;
$url = explode('/',$_SERVER['REDIRECT_URL']);
//print_r($url);
$APPLICATION->title = $_SERVER['REDIRECT_URL']=='/'?'Строим дом':str_replace('/',' ',$_SERVER['REDIRECT_URL']);
$APPLICATION->tele = substr($_SERVER["HTTP_HOST"],0,3)=='tt.'?'tt':'ru';
if($_SERVER['REDIRECT_URL']=='/' && $APPLICATION->tele=='tt') $APPLICATION->title='Йорт төзибез';
$APPLICATION->keywords = $APPLICATION->tele=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
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
if($_SERVER['REDIRECT_URL'] == '/')
	include "urnak/toep.php";
else
	include "urnak/taswir.php";
include "ajaq.php";
?>
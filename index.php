<?php
//phpinfo(); exit;
$APPLICATION = (object)array('title','tele','keywords');
$rasemnar = (object)array('july','jyyylmasy');
$url = explode('/',$_SERVER['REDIRECT_URL']);
//print_r($url);
if($_SERVER['REDIRECT_URL']=='/') 
	header('Location: /ru');
$APPLICATION->title = (in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/ru/')))?'Строим дом':str_replace('/',' ',$url[2]);
$APPLICATION->tele = ($url[1]=='tt')?'tt':'ru';
if((in_array($_SERVER['REDIRECT_URL'],array('/tt','/tt/'))) && $APPLICATION->tele=='tt') $APPLICATION->title='Йорт төзибез';
$APPLICATION->keywords = $APPLICATION->tele=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
//echo $APPLICATION->tele; exit;
if($url[2] || in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/'))) {
	if(in_array($url[2],array('лестницы','баскычлар')))    $rasemnar->july = 'rasem/basqych';
	else if(in_array($url[2],array('мебель','җиһаз')))    $rasemnar->july = 'rasem/cihaz';
	else if(in_array($url[2],array('металлконструкции','металлконструкцияләр')))    $rasemnar->july = 'rasem/mk';
	else if(in_array($url[2],array('двери','ишекләр')))    $rasemnar->july = 'rasem/ishek';
	else if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/'))) $rasemnar->july = 'rasem/yort';
    if($rasemnar->july) {
		$rasemnar->jyyylmasy = opendir($rasemnar->july);
		while (false !== ($rasem = readdir($rasemnar->jyyylmasy))){
			if($rasem!='.'&& $rasem!='..')
				$suratlar[] = "/".$rasemnar->july."/".$rasem;
		}		
	}
	else unset($url[2]);
    //echo '<pre>';print_r($suratlar);
}
include "bash.php";
include "menu.php";
//print_r($url);
if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/')))
{
	//$rasemnar->july = 'rasem/yort';
	include "urnak/slider.php";
}
else if(isset($url[2]))
	include "urnak/slider.php";
//else 
//	include "urnak/taswir.php";
include "ajaq.php";
?>
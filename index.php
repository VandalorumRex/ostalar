<?php
//phpinfo(); exit;
$APPLICATION = (object)array('title','tele','keywords');
$rasemnar = (object)array('july','jyyylmasy');
$url = explode('/',$_SERVER['REDIRECT_URL']);
//print_r($url);
if($_SERVER['REDIRECT_URL']=='/') {
	header('Location: /ru');
}        
$phone = array("(843) 245-48-03","(843) 245-35-51");
$APPLICATION->title = (in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/ru/')))?'Строим дом':str_replace('/',' ',$url[2]);
$tel = ($url[1]=='tt')?'tt':'ru';
if((in_array($_SERVER['REDIRECT_URL'],array('/tt','/tt/'))) && $tel=='tt') $APPLICATION->title='Йорт төзибез';
$APPLICATION->keywords = $tel=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
if(filter_input(INPUT_POST,'zakaz_jasaw')){
    include "xat.php";
}
if($url[2] || in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/')))
{
	if(in_array($url[2],array('лестницы','баскычлар')))    $rasemnar->july = 'rasem/basqych';
	else if(in_array($url[2],array('мебель','җиһаз')))    $rasemnar->july = 'rasem/cihaz';
	else if(in_array($url[2],array('металлконструкции','металлконструкцияләр')))    $rasemnar->july = 'rasem/mk';
	else if(in_array($url[2],array('двери','ишекләр')))    $rasemnar->july = 'rasem/ishek';
        else if(in_array($url[2],array('дома','йортлар')))  $rasemnar->july = 'rasem/yort';
	else if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/'))) $rasemnar->july = 'rasem/yort';
    if($rasemnar->july) {
		$rasemnar->jyyylmasy = opendir($rasemnar->july);
		while (false !== ($rasem = readdir($rasemnar->jyyylmasy))){
			if($rasem!='.'&& $rasem!='..')
				$suratlar[] = "/".$rasemnar->july."/".$rasem;
		}		
    }
    else {
        unset($url[2]);
    }
}
include "bash.php";
include "menu.php";
//print_r($url);
if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/')))
{
	//$rasemnar->july = 'rasem/yort';
	include "urnak/slider.php";
}
else if(isset($url[2])){
	include "urnak/slider.php";
}
//else 
//	include "urnak/taswir.php";
include "ajaq.php";
?>
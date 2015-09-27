<?php
//phpinfo(); exit;
$APPLICATION = (object)array('title','tele','keywords');
$rasemnar = (object)array('july','jyyylmasy');
$url = explode('/',$_SERVER['REDIRECT_URL']);
//$url = explode('/',$_ENV['PWD']);
//print_r($url);
//if($_SERVER['REDIRECT_URL']=='/') 
//	header('Location: /ru');
$host = explode(".",$_SERVER['HTTP_HOST']);
$last_domain = $host[count($host)-1];
unset($host[count($host)-1]);
$body_domain = implode(".",$host);
$phone = array("(843) 245-48-03","(843) 245-35-51");
$APPLICATION->title = (in_array($_SERVER['REDIRECT_URL'],array('/')))?'Строим дом':str_replace('/',' ',$url[1]);
$APPLICATION->tele = ($last_domain=='tk' || $last_domain=='net')?'tt':'ru';
if((in_array($_SERVER['REDIRECT_URL'],array('/'))) && $APPLICATION->tele=='tt') $APPLICATION->title='Йорт төзибез';
$APPLICATION->keywords = $APPLICATION->tele=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
//print_r($url);
if($url[1] || in_array($_SERVER['REDIRECT_URL'],array('/'))) {
	if(in_array($url[1],array('лестницы','баскычлар')))    $rasemnar->july = 'rasem/basqych';
	else if(in_array($url[1],array('мебель','җиһаз')))    $rasemnar->july = 'rasem/cihaz';
	else if(in_array($url[1],array('металлконструкции','металлконструкцияләр')))    $rasemnar->july = 'rasem/mk';
	else if(in_array($url[1],array('двери','ишекләр')))    $rasemnar->july = 'rasem/ishek';
	else if(in_array($url[1],array('дома','йортлар')))  $rasemnar->july = 'rasem/yort';
	else if(in_array($_SERVER['REDIRECT_URL'],array('/'))) $rasemnar->july = 'rasem/yort';
    if($rasemnar->july) {
		$rasemnar->jyyylmasy = opendir($rasemnar->july);
		while (false !== ($rasem = readdir($rasemnar->jyyylmasy))){
			if($rasem!='.'&& $rasem!='..')
				$suratlar[] = "/".$rasemnar->july."/".$rasem;
		}		
	}
	else unset($url[1]);
    //echo '<pre>';print_r($suratlar);
}
include "bash.php";
include "menu.php";
//print_r($url);
if(in_array($_SERVER['REDIRECT_URL'],array('/')))
{
	//$rasemnar->july = 'rasem/yort';
	include "urnak/toep.php";
}
else if(isset($url[1]))
	include "urnak/slider.php";
//else 
//	include "urnak/taswir.php";
include "ajaq.php";
?>
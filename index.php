<?php
ini_set('display_errors', 1); 
ini_set('error_reporting', E_ALL);
$url = explode('/',$_SERVER['REDIRECT_URL']);
if(isset($url[1]) && $url[1]>"") {
    //header('Location: /ru');
    if(in_array($url[1],["лестницы","дома","двери","металлконструкции","мебель"])) {
        header('Location: /ru/'.$url[1]);
    } elseif(in_array($url[1],["баскычлар","йортлар","ишекләр","металлконструкцияләр","җиһаз"])) {
        header('Location: /tt/'.$url[1]);
    } elseif($url[1]!="ru" && $url[1]!="tt"){
        header('Location: /ru');
    } elseif($url[1]=="ru" && isset($url[2]) && !in_array($url[2],["лестницы","дома","двери","металлконструкции","мебель"])){
        header('Location: /ru');
    } elseif($url[1]=="tt" && isset($url[2]) && !in_array($url[2],["баскычлар","йортлар","ишекләр","металлконструкцияләр","җиһаз"])){
        header('Location: /tt');
    }
}
include("klasslar.php");
$APPLICATION = new Application($url);
$rəsemnər = new Rəsemnər($url);
$qysqa = array("245-48-03","249-14-02"); 
$phone = array("+7(937)615-48-03","+7(927)249-14-02");


if(filter_input(INPUT_POST,'zakaz_jasaw')){
    include "xat.php";
}
$xat = filter_input(INPUT_COOKIE, 'xat');
if($xat>''){
    setcookie('xat', 'kitmade', time()-86400);
}


include "bash.php";
include "menu.php";

if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/')))
{
	//$rasemnar->july = 'rasem/yort';
	include "urnaek/toep.php";
}
else if(isset($url[2])){
	include "urnaek/slider.php";
}
//else 
//	include "ürnək/taswir.php";
include "ajaq.php";
if($xat=='kitte'){
    include "urnaek/qotlaw.php";
}
?>
<script  type="text/javascript">
$(document).ready(function() {
    $('#tilifun').mask("+7(999) 999-99-99"); 
        $("a.gallery").fancybox({						
            "padding" : 20,
            "imageScale" : false, 
            "zoomOpacity" : false,
            "zoomSpeedIn" : 1000,	
            "zoomSpeedOut" : 1000,	
            "zoomSpeedChange" : 1000, 
            "frameWidth" : 700,	 
            //"frameHeight" : 600, 
            "overlayShow" : true, 
            "overlayOpacity" : 0.8,	
            "hideOnContentClick" :false,
            "centerOnScroll" : false

            });
});
</script>

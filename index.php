<?php
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
$rasemnar = (object)array('july','jyyylmasy');
$qysqa = array("245-48-03","249-14-02"); 
$phone = array("+7(937)615-48-03","+7(927)249-14-02");


if(filter_input(INPUT_POST,'zakaz_jasaw')){
    include "xat.php";
}
$xat = filter_input(INPUT_COOKIE, 'xat');
if($xat>''){
    setcookie('xat', 'kitmade', time()-86400);
}

if(isset($url[2]) || in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/')))
{
    if(isset($url[2])){
	if(in_array($url[2],array('лестницы','баскычлар')))  {
            $rasemnar->july = 'rasem/basqych';
            $og_image = "http://ostalar.tk/rasem/basqych/2-1.png";
        }
	else if(in_array($url[2],array('мебель','җиһаз'))) {   
            $rasemnar->july = 'rasem/cihaz';
            $og_image = "http://ostalar.tk/rasem/cihaz/4eb8aeb7ca37ec6a6500000b.png";
        }
	else if(in_array($url[2],array('металлконструкции','металлконструкцияләр'))){
            $rasemnar->july = 'rasem/mk';
            $og_image = "http://ostalar.tk/rasem/mk/11.jpg";
        }
	else if(in_array($url[2],array('двери','ишекләр'))){
            $rasemnar->july = 'rasem/ishek';
            $og_image = "http://ostalar.tk/rasem/ishek/32.png";
        }
        else if(in_array($url[2],array('дома','йортлар'))){
            $rasemnar->july = 'rasem/yort';
            $og_image = "http://ostalar.tk/rasem/yort/0797.jpg";
        }
	else if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/'))){
            $rasemnar->july = 'rasem/yort';
            $og_image = "http://ostalar.tk/rasem/basqych/2-1.png";
        }
    } else {
        if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/'))){
            $rasemnar->july = 'rasem/yort';
            $og_image = "http://ostalar.tk/rasem/basqych/2-1.png";
        }
    }
    if($rasemnar->july) {
		$rasemnar->jyyylmasy = opendir($rasemnar->july);
		while (false !== ($rasem = readdir($rasemnar->jyyylmasy))){
			if($rasem!='.'&& $rasem!='..'){
                    $suratlar[] = "/".$rasemnar->july."/".$rasem;
            $kechkena[] = "/".str_replace("/","/kechkena/",$rasemnar->july)."/".$rasem;
            }
        }
    }		
}
else {
    unset($url[2]);
}
include "bash.php";
include "menu.php";

if(in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/tt','/ru/','/tt/')))
{
	//$rasemnar->july = 'rasem/yort';
	include "urnak/toep.php";
}
else if(isset($url[2])){
	include "urnak/slider.php";
}
//else 
//	include "urnak/taswir.php";
include "ajaq.php";
if($xat=='kitte'){
    include "urnak/qotlaw.php";
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

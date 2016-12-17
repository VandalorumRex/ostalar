<?php
//phpinfo(); exit;
$APPLICATION = (object)array('title','tele','keywords');
$rasemnar = (object)array('july','jyyylmasy');
$url = explode('/',$_SERVER['REDIRECT_URL']);
//print_r($url);
if(isset($url[1])) {
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
//$title = $_SERVER['REDIRECT_URL']=='/'?'Оста':$APPLICATION->title Казань Татарстан;
$qysqa = array("245-48-03","249-14-02"); 
$phone = array("+7(937)615-48-03","+7(927)249-14-02");
$APPLICATION->title = (in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/ru/')))?'Строим дом':str_replace('/',' ',isset($url[2])?$url[2]:"");
$tel = ($url[1]=='tt')?'tt':'ru';
if((in_array($_SERVER['REDIRECT_URL'],array('/tt','/tt/'))) && $tel=='tt') $APPLICATION->title='Йорт төзибез';
$APPLICATION->keywords = $tel=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
$APPLICATION->description = "Строим дома, бани, павильоны. Изготавливаем мебель, двери, лестницы под заказ";
if(filter_input(INPUT_POST,'zakaz_jasaw')){
    include "xat.php";
}
$xat = filter_input(INPUT_COOKIE, 'xat');
if($xat>''){
    setcookie('xat', 'kitmade', time()-86400);
}
$taswirlar = [
  "лестницы" => [
      "taswir" => "<strong>Лестница</strong> наряду с со своим прямым предназначением является одним из важнейших элементов интерьера. "
                . "В её конструкции и внешнем облике могут объединяться различные материалы и принципы проектирования, "
                . "позволяющие придать лестнице требуемые качества и своеобразность. "
                . "Само же видовое многообразие <strong>лестниц</strong> в значительной мере определяется их конструктивными особенностями. "
                . "Все <strong>лестницы</strong> можно разделить на три основных типа: косоурные, тетивные, на металлокаркасе. ",  
      "косоурные" => "Лестницы на <strong>косоурах</strong> – это универсальный тип лестниц, пригодный для установки в абсолютно любых помещениях. 
			Такие лестницы отличаются высокой надежностью и прочностью. 
			Они одни из самых популярных типов лестниц. Лестница на косоуре очень удобна и красива.
			А основой такой лестницы служит косоур (балка, поддерживающая ступени снизу). Как правило, косоур имеет зубчатую форму. 
			Зубчатый косоур представляет собой балку, верхняя часть которой вырезана в виде зубцов и в эти зубцы вставляются ступени, называемые накладными. 
			Ступени изготавливаются из дерева (бук, дуб и др.), стекла-триплекса, нержавеющей стали, искусственного или натурального камня. 
			Лестничное ограждение выполняется из материала определяемого заказчиком",
      "тетивные" => "<strong>Тетивная</strong> конструкция лестниц является одной из самых популярных. 
			Тетива это боковой несущий элемент лестницы, к которому непосредственно крепятся ступени, столбы ограждения и балясины. 
			На тетивах можно реализовать лестницы как открытого, так и закрытого типа. Они могут быть прямыми, изогнутыми и спиральными. 
			Тетива может быть изготовлена как из дерева, так и из металла. Для придания красоты деревянным тетивам из отделывают резьбой или гравировкой.
			Тетивная лестница внешне представляет собой легкую ажурную конструкцию. При изготовлении таких лестниц практически не применяется использование подступенек и массивных ограждений. 
                        Особенность тетивных лестниц именно в том, что в этих конструкциях идеально сочетаются визуальная легкость и потрясающая прочность.",
      "на металлокаркасе" => "Конструкция деревянной лестницы на <strong>металлокаркасе</strong> появилась на рынке сравнительно недавно. 
			Это стало возможным с появлением новых технологий в металлообработке и покраске. 
			Смысл такой конструкции состоит в предварительном монтаже металлокаркаса будущей лестницы с последующей облицовкой его деревом, камнем или стеклом. 
			В зависимости от Вашего желания, металлокаркас может быть видимым или обшитым деревом или гипроком – по этому, лестница с успехом впишется в любой интерьер.
			Лестницы, изготовленные на основе металлического каркаса, по сути, представлены функциональными конструкциями повышенной прочности, 
			для отделки которых используются традиционные породы древесины, такие, как лиственница, ясень и дуб. 
			Ограждения металлокаркасных лестниц выполняются, исходя из пожеланий заказчика из древесины или из металла, 
			ступени изготавливаются из дерева и крепятся на каркас.
			На сегодняшний день существует довольно много видов лестниц, для изготовления которых используется металл, 
			одним из них являются конструкции на сварных металлокаркасах, которые изготавливаются с учетом дальнейшей их отделки древесиной. 
			В качестве основы в этом случае выступает сварная конструкция повышенной прочности, при этом именно от того, 
			насколько грамотно будут просчитаны все параметры и насколько точно будут проведены сварные работы, зависит качество выполненых работ.
			Еще на этапе проектирования необходимо продумать предстоящую отделку лестницы древесиной или другим материалом, например стеклом. 
			Делается это с целью сохранения одинакового шага для всех ступеней."
    ],
    "двери" => [
        "taswir"    =>  "Свою давнюю историю двери ведут со времён жилищ первых людей. "
                        . "Вначале это был большой тяжелый камень, загораживающий вход в пещеру или ветки колючего кустарника, "
                        . "создающие непроходимый барьер для диких зверей. В жилищах кочевых народов роль двери выполняли шкуры животных, "
                        . "которые удерживали внутреннее тепло помещения и не давали просочиться холодному воздуху извне.",
        "taswir2"   =>  "Были времена, когда основным материалом для производства дверей были железо и бронза, "
                        . "но они вновь были постепенно вытеснены более практичным и легким деревом. "
                        . "Чаще использовались дуб и орех, которые отличались своей прочностью, "
                        . "но в разные века предпочтение диктовалось модой, "
                        . "поэтому стали применяться более экзотические и ценные породы дерева: палисандр, тик, клен, грушу, черешню и ясень. ",
        "taswir3"   => "В эпоху Возрождения особенно прославились итальянские мастера, "
                        . "сделав страну лидером в производстве дверей. В Милане находится самая древняя дверь, "
                        . "сохранившаяся с IV века нашей эры. Она до сих пор украшает Центральный Портал Базилики Сент-Амброджио, "
                        . "который в последний раз реставрировался лишь в 1750 году. "
                        . "Позднее мастера-краснодеревщики из Италии прославились созданием изысканных изделий в стиле рококо, "
                        . "до сих пор считающиеся настоящими произведениями искусства."
    ],
    "ишекләр"   =>  [
        "taswir"    => "<strong>Ишекләр</strong> тарихы беренче кешеләрнең торакларыннан башлана."
                        . "Башта тау куышын бикләгән зур авыр таш яисә йырткычлар үтмәслек чәнечкәле куак булган."
                        . "Далада, туңдырада яшәгән халыкларның ишекләре - хайван тиреләре булган",
        "taswir2"   => "Элек ишекләр тимердән, бакырдан ясаганнар. Әкренләп агачтан ясый башлаганнар. "
                        . "Еш кына ныклыгы белән билгеле имәннән, чикләвектән <strong>ишекләр</strong> ясаганнар."
                        . "Төрле заманнарда я палисандырга, я өрәңгегә, я грушага, я төче чиягә, я корыч-агачка мода булган",
        "taswir3"    => "Беренче агач <strong>ишекләр</strong> Иранда ясый башлаганнар. 
                        Шул ук вакытта бүлмәләр арасында <strong>ишекләр</strong> урнаштыра башлаганнар"
    ]
];
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
//print_r($url);
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

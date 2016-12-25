<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
	<title><?=$APPLICATION->title?></title>
        <script src="/script/jquery-1.11.3.min.js"></script>
        <!--link href="/amazon-style-image-scroller-master/css/amazon_scroller.css" rel="stylesheet" type="text/css"></link-->
        <!--script type="text/javascript" src="/amazon-style-image-scroller-master/js/amazon_scroller.js"></script-->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script type="text/javascript" src="/script/jquery.maskedinput.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/bizək/style.css?t=3"/>
	<link rel="alternate" hreflang="ru" href="http://ostalar.tk/ru" />
	<link rel="alternate" hreflang="tt" href="http://ostalar.tk/tt" />
	<meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="yandex-verification" content="43e48888c64838c9" />
	<meta name="yandex-verification" content="68fd5fd180d98e78" />
	<meta name="yandex-verification" content="4279c116cd7a9e02" />
	<meta name="google-site-verification" content="CXdp81AdQir1Yf9Sq2AOvUuzgiWQHpTm2TdfcD1LxMk" />
	<meta name="google-site-verification" content="9LmeuCKZ5B6mhd72djDF6sKwUJadrrOSM0Xc4JO2RHo" />
        <meta property="og:type" content="website" />
	<meta property="og:url" content="<?=$_SERVER["REQUEST_SCHEME"]."://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>" />
        <meta property="og:title" content="<?=$APPLICATION->title?>"/>
        <meta property="og:image" content="<?=$rəsemnər->rəseme?>"/>
        <meta property="og:description" content="<?=$APPLICATION->description." ".$qysqa[0]?>"/>
	<meta name="keywords" content="<?=$APPLICATION->keywords?>" />
        <meta name="description" content="<?=$APPLICATION->description." ".$qysqa[0]?>"/>
         <!-- Add mousewheel plugin (this is optional) -->
        <script type="text/javascript" src="/script/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/script/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/script/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/script/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/script/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="script/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <link rel="stylesheet" href="/script/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="/script/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
        
        <script>
            (function() {
              var cx = '009647158219691168182:3eede9l0wju';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          
</head>
<body>
<div class="bash" class="rows" itemscope itemtype="http://schema.org/LocalBusiness" >
    <div class="col-md-2">
        <a id="oeyga" href="/"><img itemprop="image" src="/rasem/shoerepborghych.png" /></a>
    </div>
    <div class="col-md-7">
        <div class="ostalar"><span id="_name1" itemprop="name">ОСТАЛАР</span> <span itemprop="address"><?=$APPLICATION->address();?></span></div>
        <?php $title=$APPLICATION->tele=='ru'?'Современные деревянные конструкции в строительстве':'Төзелештәге хәзерге агач конструкцияләр'?>
        <div class="modern"><?=$title?></div>
    </div>
    <div class="col-md-3">
        <a id="telefon" href="tel:<?=str_replace(array(' ','(',')','-'),'',$phone[0])?>">
            <span id="_telephone2" itemprop="telephone"><?=$qysqa[0]?></span>
        </a>
        <div id="versia">
            <span class="globus"></span>
            <a class="ru" href="<?= Törlər::$JULLARY['ru'][Törlər::isemnənIdAlu(isset($url[2])?$url[2]:'')]?>" hreflang="ru">Русский</a>
            <span class="tayaq">|</span>
            <a class="tt" href="<?= Törlər::$JULLARY['tt'][Törlər::isemnənIdAlu(isset($url[2])?$url[2]:'')]?>" hreflang="tt">Татарча</a>
        </div>
    </div>  
</div>
<?php if(strpos(filter_input(INPUT_SERVER,"HTTP_HOST"),".local")===false):?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63078283-1', 'auto');
  ga('send', 'pageview');

</script>
<?php endif?>

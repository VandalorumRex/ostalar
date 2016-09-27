<!DOCTYPE html>
<html>
<head>
	<title><?=$_SERVER['REDIRECT_URL']=='/'?'Оста':$APPLICATION->title?> Казань Татарстан</title>
        <script async src="/script/jquery-1.11.3.min.js"></script>
        <script async type="text/javascript" src="/script/jquery.maskedinput.min.js"></script>
	<link rel="stylesheet" href="/style.css"/>
	<link rel="alternate" hreflang="ru" href="http://ostalar.ru/ru" />
	<link rel="alternate" hreflang="tt" href="http://ostalar.ru/tt" />
	<meta charset="utf-8"/>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name='yandex-verification' content='43e48888c64838c9' />
	<meta name='yandex-verification' content='68fd5fd180d98e78' />
	<meta name='yandex-verification' content='4279c116cd7a9e02' />
	<meta name="google-site-verification" content="CXdp81AdQir1Yf9Sq2AOvUuzgiWQHpTm2TdfcD1LxMk" />
	<meta name="google-site-verification" content="9LmeuCKZ5B6mhd72djDF6sKwUJadrrOSM0Xc4JO2RHo" />
	
	<meta name="keywords" content="<?=$APPLICATION->keywords?>">
	
         <!-- Add mousewheel plugin (this is optional) -->
        <script async type="text/javascript" src="/script/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/script/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script async type="text/javascript" src="/script/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/script/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script async type="text/javascript" src="/script/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script async type="text/javascript" src="script/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

        <link rel="stylesheet" href="/script/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script async type="text/javascript" src="/script/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
        <link href="/amazon-style-image-scroller-master/css/amazon_scroller.css" rel="stylesheet" type="text/css"></link>
        <script async type="text/javascript" src="/amazon-style-image-scroller-master/js/amazon_scroller.js"></script>
        
</head>
<body>
<div id="bash">
	<div class="uzak">
		<h1><a id="oeyga" href="/"><img src="/rasem/shoerepborghych.jpg" width="60px" height="60px" align="top"/> Оста <span id="jort">лар</span></a></h1>
		<div id="versia">
			 <p><a href="/ru" hreflang="ru">русская версия</a></p>
			 <p><a href="/tt" hreflang="tt">татарча версия</a></p>
		</div>
		<div id="telefon"><a href="tel:<?=str_replace(array(' ','(',')','-'),'',$phone[time() % 2])?>"><?=$qysqa[time() % 2]?></a></div>
		<div class="clear"></div>
   </div>
</div>
<?//if($body_domain=='ostalar'):?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63078283-1', 'auto');
  ga('send', 'pageview');

</script>
<?//endif?>

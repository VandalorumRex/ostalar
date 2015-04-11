<?
$menu = simplexml_load_string(file_get_contents("menu.xml"));
//print '<pre>';//print_r($xml);print '</pre>';
?>
<div id="bash_menu">
	<div class="uzak">
		<div id="title">Современные деревянные конструкции в строительстве</div>
		<ul id="menu_uze">
            <?foreach($menu as $item):?>
                <?$it = (array)$item;?>
                <?$href=isset($it['@attributes']['href'])?$it['@attributes']['href']:'/'.$it['@attributes']['name'];?>               
                <li><a href="<?=$href?>"><?=$it['@attributes']['name']?></a>
                <?if(isset($it['subitem'])):?>
                    <ul>
                    <?foreach($it['subitem'] as $subitem):?>
                        <li><a href="/<?=$it['@attributes']['name']?>/<?=$subitem?>"><?=$subitem?></a></li>
                    <?endforeach?>
                    </ul>
                <?endif?>
                </li>
            <?endforeach?>
			<!--li><a href="/">Главная</a></li>
			<li><a href="/basqych">Лестницы</a>
				<ul>
					<li><a href="/basqych">косоурные</a>
					<li><a href="/basqych">тетивные</a>
					<li><a href="/basqych">на металкаркасе</a>
				</ul>
			</li>
			<li><a href="/jihaz">Мебель</a>
				<ul>
					<li><a href="/jihaz">корпусная мебель</a>
					<li><a href="/jihaz">из массива</a>
					<li><a href="/jihaz">кухни</a>
				</ul>
			</li>
			<li><a href="/mk">Металлконструкции</a>
				<ul>
					<li><a href="/mk">павильоны</a>
				</ul>
			</li>
			<li><a href="/ishek">Двери</a>
				<ul>
					<li><a href="/ishek">металлические</a>
					<li><a href="/ishek">из массива</a>
				</ul>
			</li-->
		</ul>
	</div>
	<div class="clear"></div>
</div>
<?
$menu = simplexml_load_string(file_get_contents("menu.xml"));
//print '<pre>';print_r($menu);print '</pre>';
?>
<div id="bash_menu">
	<div class="uzak">
		<?$title=$APPLICATION->tele=='ru'?'Современные деревянные конструкции в строительстве':'Төзелештәге хәзерге агач конструкцияләр'?>
		<div id="title"><?=$title?></div>
		<ul id="menu_uze">
            <?foreach($menu as $item):?>
                <?$it = (array)$item;?>
				<?$name = $APPLICATION->tele=='ru'?$it['@attributes']['name']:$it['@attributes']['tt']?>
                <?$href=(isset($it['@attributes']['href'])?$it['@attributes']['href']:'/'.$name);?>               
                <li><a href="<?=$href?>" hreflang="<?=$APPLICATION->tele?>"><?=$name?></a>
                <?if(isset($it['subitem'])):?>
                    <ul>
                    <?if(is_array($it['subitem'])):?>
                        <?foreach($it['subitem'] as $subitem):?>
                            <li><a href="/<?=$it['@attributes']['name']?>/<?=$subitem?>"><?=$subitem?></a></li>
                        <?endforeach?>
                    <?else:?>
                        <li><a href="/<?=$it['@attributes']['name']?>/<?=$it['subitem']?>"><?=$it['subitem']?></a></li>
                    <?endif?>
                    </ul>
                <?endif?>
                </li>
            <?endforeach?>			
		</ul>
	</div>
	<div class="clear"></div>
</div>
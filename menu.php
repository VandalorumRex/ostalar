<?php
$menu = simplexml_load_string(file_get_contents("menu.xml"));
//print '<pre>';print_r($menu);print '</pre>';
?>
<div id="bash_menu">
	<div class="uzak">
            <?php $title=$tel=='ru'?'Современные деревянные конструкции в строительстве':'Төзелештәге хәзерге агач конструкцияләр'?>
            <div id="title"><?=$title?></div>
                <ul id="menu_uze">
                <?php foreach($menu as $item):
                    $it = (array)$item;
                    $name = $tel=='ru'?$it['@attributes']['name']:$it['@attributes']['tt'];
                    $href=(isset($it['@attributes']['href'])
                            ?"/".$tel.$it['@attributes']['href']
                            :'/'.$tel."/".$name);?>               
                    <li><a href="<?=$href?>" hreflang="<?=$tel?>"><?=$name?></a>
                    <?php /*if(isset($it['subitem'])):?>
                        <ul>
                        <?if(is_array($it['subitem'])):?>
                            <?foreach($it['subitem'] as $subitem):?>
                                <li><a href="/<?=$it['@attributes']['name']?>/<?=$subitem?>"><?=$subitem?></a></li>
                            <?endforeach?>
                        <?else:?>
                            <li><a href="/<?=$it['@attributes']['name']?>/<?=$it['subitem']?>"><?=$it['subitem']?></a></li>
                        <?endif?>
                        </ul>
                    <?endif*/?>
                    </li>
                <?php endforeach?>			
		</ul>
            <div class="clear"></div>
	</div>
	<div class="clear"></div>
</div>
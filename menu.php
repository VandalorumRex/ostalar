<?php
$menu = simplexml_load_string(file_get_contents("menu.xml"));
//print '<pre>';print_r($menu);print '</pre>';
?>
<div id="bash_menu">
    <div class="col-md-9">
        <ul id="menu_uze">
                <?php foreach($menu as $item):
                    $it = (array)$item;
                    $name = $APPLICATION->tele=='ru'?$it['@attributes']['name']:$it['@attributes']['tt'];
                    $href=(isset($it['@attributes']['href'])
                            ?"/".$APPLICATION->tele.$it['@attributes']['href']
                            :'/'.$APPLICATION->tele."/".$name);
                    $class=(isset($url[2]))?(($url[2]==$name)?' class="saylangan"':''):(($name=='главная' || $name=='баш бит')?' class="saylangan"':'');?>               
                    <li<?=$class?>><a href="<?=$href?>" hreflang="<?=$APPLICATION->tele?>"><?=$name?></a>
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
    </div>
    <div class="col-md-3">
        <!--div><gcse:search></gcse:search></div-->
        <input type="search" class="ezläw" />
        <span id="ezlägech"></span>
    </div>
	<!--div class="uzak">
            
                
            <div class="clear"></div>
	</div>
	<div class="clear"></div-->
        
</div>

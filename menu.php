<?php
$menu = simplexml_load_string(file_get_contents("menu.xml"));
//print '<pre>';print_r($menu);print '</pre>';
?>
<div class="muyyn">
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
    <div class="col-md-3 find_line">
        <!--div><gcse:search></gcse:search></div-->
        <table>
            <tr>
                <td style="vertical-align:middle"><input type="search" class="ezläw" id="ezläw" list="törlər" /></td>
        
                <td style="vertical-align:middle"><div id="ezlägech"></div></td>
            </tr>
        </table>
        <datalist id="törlər">
            <?php foreach (Törlər::$ISEMNƏRE[$APPLICATION->tele] as $isem):?>
            <option value="<?=$isem?>"></option>
            <?php endforeach;?>
        </datalist>
    </div>
    <script>
        $("#ezlägech").click(function(){
            window.location = "/<?=$APPLICATION->tele?>/"+$('#ezläw').val().toLowerCase();
        });
    </script>
        
</div>

<div class="tən">
    <div class="yzba">
        <h1 class="title"><?=$APPLICATION->title?></h1>
        <div class="suz">
            <?php echo $APPLICATION->süz;?>
        </div>
        <div class="töymə-1">
            <?=$APPLICATION->zayavkaJibərü()?>
        </div>
    </div>
    <div class="rows line">
        <div class="line__title"><?=Törlər::$ISEMƏR[$APPLICATION->tele][Törlər::YORTLAR]?> 
            <a href="<?=Törlər::$JULLAR[$APPLICATION->tele][Törlər::YORTLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
    </div>
    <div class="rows line">
        <div class="line__title"><?=Törlər::$ISEMƏR[$APPLICATION->tele][Törlər::BASQYCHLAR]?> 
            <a href="<?=Törlər::$JULLAR[$APPLICATION->tele][Törlər::BASQYCHLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
    </div> 
</div>
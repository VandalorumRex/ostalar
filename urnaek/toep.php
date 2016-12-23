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
        <div class="rows">
            <img class="line__image" src="/rasem/yort/0769.jpg" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/yort/0785.jpg" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/yort/0793.jpg" width="335px" height="335px"/>
        </div>
    </div>
    <div class="rows line">
        <div class="line__title"><?=Törlər::$ISEMƏR[$APPLICATION->tele][Törlər::BASQYCHLAR]?> 
            <a href="<?=Törlər::$JULLAR[$APPLICATION->tele][Törlər::BASQYCHLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
        <div class="rows">
            <img class="line__image" src="/rasem/basqych/20140927_164447.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/basqych/88.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/basqych/79.png" width="335px" height="335px"/>
        </div>
    </div>
    <div class="divar">
        <?php include ("urnaek/zakaz.php");?>
    </div>
</div>
<div class="tən">
    <div class="yzba">
        <h1 class="title"><?=$APPLICATION->title?></h1>
        <div class="suz">
            <?php echo $APPLICATION->süz;?>
        </div>
        <a class="töymə-1" href="#zakaz">
            <?=$APPLICATION->zayavkaJibərü()?>
        </a>
    </div>
    <div class="rows line">
        <div class="line__title"><?=Törlər::$ISEMNƏRE[$APPLICATION->tele][Törlər::YORTLAR]?> 
            <a href="<?=Törlər::$JULLARY[$APPLICATION->tele][Törlər::YORTLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
        <div class="rows">
            <img class="line__image" src="/rasem/Layer 6.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/Layer 7.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/Layer 8.png" width="335px" height="335px"/>
        </div>
    </div>
    <div class="rows line">
        <div class="line__title"><?=Törlər::$ISEMNƏRE[$APPLICATION->tele][Törlər::BASQYCHLAR]?> 
            <a href="<?=Törlər::$JULLARY[$APPLICATION->tele][Törlər::BASQYCHLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
        <div class="rows">
            <img class="line__image" src="/rasem/basqych/20140927_164447.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/basqych/88.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/basqych/79.png" width="335px" height="335px"/>
        </div>
    </div>
    
    <?php include ("urnaek/zakaz.php");?>
    
</div>
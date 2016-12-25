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
    <div class="rows line" itemscope itemtype="http://schema.org/Offer">
        <div class="line__title">
            <span itemprop="name"><?=Törlər::$ISEMNƏRE[$APPLICATION->tele][Törlər::YORTLAR]?></span>
            <a class="barysyn_kürsət" href="<?=Törlər::$JULLARY[$APPLICATION->tele][Törlər::YORTLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
        <div class="rows" align="center">
            <div class="line__image" id="bash_bit_yort_1" >
                <div itemprop="image" style="display:none;">http://<?=$_SERVER['HTTP_HOST']?>/rasem/Layer6.png</div>
                <div class="bəyə" itemprop="price"><?=Törlər::$BƏYƏLƏRE[$APPLICATION->tele][Törlər::YORTLAR]?></div>
            </div>
             <div class="line__image" id="bash_bit_yort_2" >
                 <div itemprop="image" style="display:none;">http://<?=$_SERVER['HTTP_HOST']?>/rasem/Layer7.png</div>
                <div class="bəyə"  itemprop="price"><?=Törlər::$BƏYƏLƏRE[$APPLICATION->tele][Törlər::YORTLAR]?></div>
            </div>
             <div class="line__image" id="bash_bit_yort_3">
                 <div itemprop="image" style="display:none;">http://<?=$_SERVER['HTTP_HOST']?>/rasem/Layer8.png</div>
                <div class="bəyə"  itemprop="price"><?=Törlər::$BƏYƏLƏRE[$APPLICATION->tele][Törlər::YORTLAR]?></div>
            </div>
        </div>
    </div>
    <div class="rows line" itemscope itemtype="http://schema.org/Offer">
        <div class="line__title">
            <span itemprop="name"><?=Törlər::$ISEMNƏRE[$APPLICATION->tele][Törlər::BASQYCHLAR]?></span>
            <a class="barysyn_kürsət" href="<?=Törlər::$JULLARY[$APPLICATION->tele][Törlər::BASQYCHLAR]?>"><?=$APPLICATION->barysynQaraw()?></a>
        </div>
        <div class="rows" align="center">
            <div class="line__image" id="bash_bit_basqych_1" >
                <div itemprop="image" style="display:none;">http://<?=$_SERVER['HTTP_HOST']?>/rasem/Layer9.png</div>
                <div class="bəyə" itemprop="price"><?=Törlər::$BƏYƏLƏRE[$APPLICATION->tele][Törlər::BASQYCHLAR]?></div>
            </div>
             <div class="line__image" id="bash_bit_basqych_2">
                <div itemprop="image" style="display:none;">http://<?=$_SERVER['HTTP_HOST']?>/rasem/Layer10.png</div>
                <div class="bəyə" itemprop="price"><?=Törlər::$BƏYƏLƏRE[$APPLICATION->tele][Törlər::BASQYCHLAR]?></div>
            </div>
             <div class="line__image" id="bash_bit_basqych_3">
                 <div itemprop="image" style="display:none;">http://<?=$_SERVER['HTTP_HOST']?>/rasem/Layer11.png</div>
                <div class="bəyə" itemprop="price"><?=Törlər::$BƏYƏLƏRE[$APPLICATION->tele][Törlər::BASQYCHLAR]?></div>
            </div>
            <!--img class="line__image" src="/rasem/basqych/20140927_164447.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/basqych/88.png" width="335px" height="335px"/>
            <img class="line__image" src="/rasem/basqych/79.png" width="335px" height="335px"/-->
        </div>
    </div>
    
    <?php include ("urnaek/zakaz.php");?>
    
</div>
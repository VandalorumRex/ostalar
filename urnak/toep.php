<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <div class="suz">
        <?if($APPLICATION->tele=='ru'):?>
        Мы комманда профессионалов. Делаем всё с гарантией от домов до стульев.
        <?else:?>
        Без осталар. Йортлар төзибез, җиһаз, баскычлар, ишекләр ясыйбыз. Барлык эшләребезгә гарантия бирәбез.
        <?endif?>
        </div>
        <?echo iconv('utf8','cp1251','<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>');?>
        <div align="center">
        <?foreach($suratlar as $surat):?>           
            <img src="<?=$surat?>" width="200px" height="100px"/>
        <?endforeach?>
        </div>
        
    </div>
</div>
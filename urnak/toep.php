<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <div class="suz">
        <?php if($tel=='ru'):?>
        Мы комманда профессионалов. Делаем всё с гарантией от домов до стульев.
        Нет дела, которое мы не сможем.
        <?else:?>
        Без осталар. Йортлар төзибез, җиһаз, баскычлар, ишекләр ясыйбыз. Барлык эшләребезгә гарантия бирәбез.
        Без булдыралмаслык эш җук.
        <?php endif?>
        </div>
        <?php include("urnak/zakaz.php");
        echo iconv('utf8','cp1251','<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>');?>
        <div align="center">
        <?php foreach($suratlar as $key=>$surat):?>           
            <a class="gallery" rel="group" title="это фото 1" href="<?=$surat?>">
				<img src="<?=$kechkena[$key]?>" width="200px" height="100px"/>
			</a>
        <?php endforeach?>
        </div>
        
    </div>
</div>
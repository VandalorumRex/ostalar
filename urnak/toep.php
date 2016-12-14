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
        <?php if($tel=='ru'):?>           
            <a class="gallery" rel="group" title="дома" href="/ru/дома">
                <img src="/rasem/yort/0797.jpg" height="400px" alt="дома"/>
            </a>
            <a class="gallery" rel="group" title="лестницы" href="/ru/лестницы">
                <img src="/rasem/basqych/2-1.png" height="400px" alt="лестницы"/>
            </a>
            <a class="gallery" rel="group" title="мебель" href="/ru/мебель">
                <img src="/rasem/cihaz/4eb8aeb7ca37ec6a6500000b.png" height="400px" alt="мебель" />
            </a>
            <a class="gallery" rel="group" title="металлконструкции" href="/ru/металлконструкции">
                <img src="/rasem/mk/11.jpg" height="400px" alt="металлконструкции" />
            </a>
            <a class="gallery" rel="group" title="двери" href="/ru/двери">
                <img src="/rasem/ishek/32.png" height="400px" alt="двери" />
            </a>
        <?php else:?>
            <a class="gallery" rel="group" title="йортлар" href="/tt/йортлар">
                <img src="/rasem/yort/0797.jpg" height="400px" alt="йортлар"/>
            </a>
            <a class="gallery" rel="group" title="баскычлар" href="/tt/баскычлар">
                <img src="/rasem/basqych/2-1.png" height="400px" alt="баскычлар"/>
            </a>
            <a class="gallery" rel="group" title="җиһаз" href="/tt/җиһаз">
                <img src="/rasem/cihaz/4eb8aeb7ca37ec6a6500000b.png" height="400px" alt="җиһаз" />
            </a>
            <a class="gallery" rel="group" title="металлконструкцияләр" href="/tt/металлконструкцияләр">
                <img src="/rasem/mk/11.jpg" height="400px" alt="металлконструкцияләр" />
            </a>
            <a class="gallery" rel="group" title="ишекләр" href="/tt/ишекләр">
                <img src="/rasem/ishek/32.png" height="400px" alt="ишекләр" />
        <?php endif?>
        </div>
        
    </div>
</div>
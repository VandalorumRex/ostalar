<div class="divar">
    <div class="aq">
        <h1><?=$APPLICATION->title?></h1>
        <?
        while (false !== ($rasem = readdir($rasemnar->jyyylmasy))):?>           
            <img src="/<?=$rasemnar->july."/".$rasem?>" width="200px" height="100px"/>
        <?endwhile?>        
    </div>
</div>
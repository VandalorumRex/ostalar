<div class="divar">
    <div class="aq">
        <h1><?=$APPLICATION->title?></h1>
<<<<<<< HEAD
        <?foreach($suratlar as $surat):?>           
            <img src="<?=$surat?>" width="200px" height="100px"/>
        <?endforeach?>        
=======
        <?
        while (false !== ($rasem = readdir($rasemnar->jyyylmasy))):?>           
            <img src="/<?=$rasemnar->july."/".$rasem?>" width="200px" height="100px"/>
        <?endwhile?>        
>>>>>>> 61417d64891b7f6ac3e97c422e7e553d2f0c3191
    </div>
</div>
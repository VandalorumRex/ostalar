<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <?php $isemnar = null;
        if(isset($taswirlar[$url[2]])):
            $isemnar = array_keys($taswirlar[$url[2]]); 
         endif?>
        <?php include("urnak/zakaz.php");
        
        echo iconv('utf8','cp1251','<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>');?>
		<div class="clear"></div>
	<?php if($isemnar):
            $j = 0; $max = 3;
            foreach ($isemnar as $key=>$isem):?>
                <div class="suz"><?php echo $taswirlar[$url[2]][$isem]?></div>
                <div align="center">
                <?php for($i=0;$i<$max;$i++):?>
                    <a class="gallery" rel="group" title="<?=$APPLICATION->title?>" href="<?=$suratlar[$i+$j]?>">
			<img src="<?=$kechkena[$i+$j]?>" height="300px"/>
                    </a>
                <?php endfor;
                $j=$j+$max;?>
                </div>
        <?php endforeach;
            else:
            foreach($suratlar as $key=>$surat):?>
                            
			<a class="gallery" rel="group" title="<?=$APPLICATION->title?>" href="<?=$surat?>">
				<img src="<?=$kechkena[$key]?>" height="200px"/>
			</a>
                            
        <?php endforeach;
        endif;?>		
    </div>
</div>
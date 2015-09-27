<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <?php include("urnak/zakaz.php");
        echo iconv('utf8','cp1251','<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>');?>
		<div class="clear"></div>
		<div align="center" id="amazon_scroller1" class="amazon_scroller">
                    <div class="amazon_scroller_mask">
                        <ul>
        <?php foreach($suratlar as $surat):?>
                            <li>
			<a class="gallery" rel="group" title="<?=$APPLICATION->title?>" href="<?=$surat?>">
				<img src="<?=$surat?>" height="500px"/>
			</a>
                            </li>
        <?php endforeach?>
                        </ul>
                    </div>
                    <ul class="amazon_scroller_nav">
                        <li></li>
                        <li></li>
                    </ul>
                    <div style="clear: both"></div>
		</div>
    </div>
</div>
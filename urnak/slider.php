<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <?php include("urnak/zakaz.php");
        echo iconv('utf8','cp1251','<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>');?>
		<div class="clear"></div>
		<div align="center">
        <?php foreach($suratlar as $surat):?>
			<a class="gallery" rel="group" title="<?=$APPLICATION->title?>" href="<?=$surat?>">
				<img src="<?=$surat?>" height="500px"/>
			</a>
        <?php endforeach?>
		</div>
    </div>
</div>
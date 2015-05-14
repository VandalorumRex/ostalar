<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <?echo iconv('utf8','cp1251','<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>');?>
        <?/*foreach($suratlar as $surat):?>           
            <img src="<?=$surat?>" width="200px" height="100px"/>
        <?endforeach*/?>
        <div id="surat">
           <!--img id="rasem" src="<?=$suratlar[0]?>" width="960px" height="480px"/--> 
		   <div id="rasem" style="border-radius:30px;clear:both;margin-left:auto;margin-right:auto;width:960px;height:720px;background:url(<?=$suratlar[0]?>) no-repeat;background-size:contain;"></div>
        </div>
        <br/>
        <script>           
        setInterval(function(){
            //$('#rasem').hide("slow");
            //$('#rasem').attr('src', surat[i]);
			//i++;
			if (surat.length<=i) {
				i=0;
			}
			$('#rasem').css('background','url('+surat[i]+') no-repeat');
			$('#rasem').css('background-size','contain');
			i++;
            //$('#rasem').show("slow");
            
            //alert(surat[i]);
        },
                    7000);
        </script>
    </div>
</div>
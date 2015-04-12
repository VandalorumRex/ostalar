<div class="divar">
    <div class="aq">
        <script> var i=0;</script>
        <h1 id="title"><?=$APPLICATION->title?></h1>
        <?echo '<script>var surat = ["'.implode("\",\"",$suratlar).'"]</script>';?>
        <?/*foreach($suratlar as $surat):?>           
            <img src="<?=$surat?>" width="200px" height="100px"/>
        <?endforeach*/?>
        <div id="surat">
           <img id="rasem" src="<?=$suratlar[0]?>" width="960px" height="480px"/> 
        </div>
        <br/>
        <script>           
        setInterval(function(){
            //$('#rasem').hide("slow");
            $('#rasem').attr('src', surat[i]);
            //$('#rasem').show("slow");
            i++;
            //alert(surat[i]);
        },
                    7000);
        </script>
    </div>
</div>
<div id="ajaq">
    <div class="suzler">
            Строим павильоны  строим дома: изготовляем двери; делаем двери. Делаем стулья -  изготовляем лестницы. Изготовляем столы? Строим бани. Делаем лестницы, изготовляем мебель: изготовляем стулья -  делаем мебель?
    </div>
    <div align="center" style="padding-top:40px;">
       <!--a style="color:white" href="http://www.dot.tk" target="_blank">Получить домен *.tk</a-->
       <!--(843) 245-48-03, (843) 245-35-51-->
	    <?php foreach($phone as $key=>$tel):?>
			<a href="tel:<?=str_replace(array(' ','(',')','-'),'',$tel);?>"><?=$qysqa[$key]?></a>&nbsp;&nbsp;&nbsp;
		<?php endforeach;?>
        
    </div>
    <div align="center">
        <?php if(strpos(filter_input(INPUT_SERVER,"HTTP_HOST"),".local")===false):?>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter29640165 = new Ya.Metrika({id:29640165,
                            clickmap:true,
                            trackHash:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="//mc.yandex.ru/watch/29640165" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
        <?php endif;?>
        
    </div>
    
</div>

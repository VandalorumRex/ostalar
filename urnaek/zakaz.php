<?php
    $isem = array("ru" => "ВАШЕ ИМЯ", "tt" => "ИСЕМЕГЕЗ");
    $tilifun = array("ru" => "ВАШ ТЕЛЕФОН", "tt" => "ТЕЛЕФОНЫГЫЗ");
    $zakaz = array("ru" => "СДЕЛАТЬ ЗАКАЗ", "tt" => "ЗАКАЗ ЯСЫЙМ");
?>
<form method="post" align="center">
    <p><input class="input-text" name="isem" id="isem" placeholder="<?=$isem[$APPLICATION->tele]?>" type="text" required="" /></p>
    <p><input class="input-text" name="tilifun" id="tilifun" placeholder="<?=$tilifun[$APPLICATION->tele]?>" type="tel" required="" /></p>
    <p><input class="input-button" name="zakaz_jasaw" value="<?=$zakaz[$APPLICATION->tele]?>" type="submit" /></p>
</form>

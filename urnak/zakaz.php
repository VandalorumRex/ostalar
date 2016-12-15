<?php
    $isem = array("ru" => "ВАШЕ ИМЯ", "tt" => "ИСЕМЕГЕЗ");
    $tilifun = array("ru" => "ВАШ ТЕЛЕФОН", "tt" => "ТЕЛЕФОНЫГЫЗ");
    $zakaz = array("ru" => "СДЕЛАТЬ ЗАКАЗ", "tt" => "ЗАКАЗ ЯСЫЙМ");
?>
<form method="post" align="center">
    <p><input name="isem" placeholder="<?=$isem[$tel]?>" type="text" required="" /></p>
    <p><input name="tilifun" id="tilifun" placeholder="<?=$tilifun[$tel]?>" type="tel" required="" /></p>
    <p><input name="zakaz_jasaw" value="<?=$zakaz[$tel]?>" type="submit" /></p>
</form>

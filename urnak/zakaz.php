<?php
    $isem = array("ru" => "ВАШЕ ИМЯ", "tt" => "ИСЕМЕГЕЗ");
    $tilifun = array("ru" => "ВАШ ТЕЛЕФОН", "tt" => "ТЕЛЕФОНЫГЫЗ");
    $zakaz = array("ru" => "СДЕЛАТЬ ЗАКАЗ", "tt" => "ЗАКАЗ ЯСЫЙМ");
?>
<form method="post">
    <input name="isem" placeholder="<?=$isem[$tel]?>" type="text" />
    <input name="tilifun" placeholder="<?=$tilifun[$tel]?>" type="text" />
    <input name="zakaz_jasaw" value="<?=$zakaz[$tel]?>" type="submit" />
</form>
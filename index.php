<?php
include "bash.php";
include "menu.php";
//$APPLICATION = object();
$APPLICATION->title = $_SERVER['REDIRECT_URL']=='/'?'Строим дом':str_replace('/',' ',$_SERVER['REDIRECT_URL']);
$rasemnar->july = 'rasem/mk';
$rasemnar->jyyylmasy = opendir($rasemnar->july);
include "urnak/toep.php";
?>

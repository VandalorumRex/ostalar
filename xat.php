<?php 
$bit = 'http://'.filter_input(INPUT_SERVER,"HTTP_HOST").filter_input(INPUT_SERVER,"REQUEST_URI");
$to = 'gho-mansur@yandex.ru';
$subject = 'Заказ';
if($tel=='ru'){
    $message = 'Имя: '.filter_input(INPUT_POST, 'isem').'<br />'
            .'Телефон: '.filter_input(INPUT_POST, 'tilifun').'<br />'
            .'Страница заявки: '.$bit;
}
mail($to, $subject, $message);
setcookie('xat','kitte');
header('Location: '.$bit);
exit;
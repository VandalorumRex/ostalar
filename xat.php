<?php 
$bit = 'http://'.filter_input(INPUT_SERVER,"HTTP_HOST").filter_input(INPUT_SERVER,"REQUEST_URI");
$to = 'gho-mansur@yandex.ru';
$subject = 'Заказ';
//if($tel=='ru')
{
    $message = 'Имя: '.filter_input(INPUT_POST, 'isem').'<br />'
            .'Телефон: '.filter_input(INPUT_POST, 'tilifun').'<br />'
            .'Страница заявки: '.$bit;
}
$xat = mail($to, $subject, $message);
if($xat){
    setcookie('xat','kitte',time()+60);
}
else{
    setcookie('xat','kitmade',time()+60);
}
header('Location: '.$bit);
exit;
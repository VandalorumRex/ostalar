<?php 
$bit = 'http://'.filter_input(INPUT_SERVER,"HTTP_HOST").filter_input(INPUT_SERVER,"REQUEST_URI");
$to = 'gho-mansur@yandex.ru, bashirovilnar@mail.ru';
$subject = 'Заказ';
if($tel=='ru')
{
    $message = 'Имя: '.filter_input(INPUT_POST, 'isem')."\n"
            .'Телефон: '.filter_input(INPUT_POST, 'tilifun')."\n"
            .'Интерес: '.filter_input(INPUT_SERVER,"REQUEST_URI");
}
else{
    $message = 'Исеме: '.filter_input(INPUT_POST, 'isem')."\n"
            .'Телефоны: '.filter_input(INPUT_POST, 'tilifun')."\n"
            .'Кызыксына: '.filter_input(INPUT_SERVER,"REQUEST_URI");
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
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Application
 *
 * @author mansur
 */
class Application {
    //put your code here
    public $title;
    public $tele;
    public $keywords;
    
    public function __construct($url) {
        $this->tele = ($url[1]=='tt')?'tt':'ru';
        $this->title = (in_array($_SERVER['REDIRECT_URL'],array('/','/ru','/ru/')))?'Строим дом':str_replace('/',' ',isset($url[2])?$url[2]:"");
        if((in_array($_SERVER['REDIRECT_URL'],array('/tt','/tt/'))) && $this->tele=='tt'){
            $this->title='Йорт салабыз';
        }
        $this->keywords = $this->tele=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
        if(in_array($_SERVER['REDIRECT_URL'], ["/","/ru","/ru/"])){
            $this->description = "Строим дома, бани, павильоны. Изготавливаем мебель, двери, лестницы под заказ";
        } else if(in_array($_SERVER['REDIRECT_URL'], ["/tt","/tt/"])){
            $this->description = "Йортлар, мунчалар, павильоннар салабыз. Ишекләр, җиһаз, баскычлар ясыйбыз";
        } else if($this->tele=="ru"){
            if($url[2]=="дома"){
                $this->description = "Строим ".$url[2];
            } else {
                $this->description = "Изготавливаем ".$url[2];
            }
        } else {
            if($url[2]=="йортлар"){
                $this->description = $url[2]." салабыз";
            } else {
                $this->description = $url[2]." ясыйбыз";
            }
        }       
    }
}

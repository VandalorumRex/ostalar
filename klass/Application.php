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
    public $süz;


    public function __construct($url) {
        $this->tele = ($url[1]=='tt')?'tt':'ru';
        $this->title = (in_array($_SERVER['REQUEST_URI'],array('/','/ru','/ru/')))?'Строим дом':str_replace('/',' ',isset($url[2])?$url[2]:"");
        if((in_array($_SERVER['REQUEST_URI'],array('/tt','/tt/'))) && $this->tele=='tt'){
            $this->title='Йорт салабыз';
        }
        $this->keywords = $this->tele=='tt'?'баскычлар, ишекләр, җиһаз':'лестницы, двери, мебель';
        if(in_array($_SERVER['REQUEST_URI'], ["/","/ru","/ru/"])){
            $this->description = "Строим дома, бани, павильоны. Изготавливаем мебель, двери, лестницы под заказ";
        } else if(in_array($_SERVER['REQUEST_URI'], ["/tt","/tt/"])){
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
        if($this->tele=='ru'){
            $this->süz = 'Мы комманда профессионалов. Делаем всё с гарантией от домов до стульев.
            Нет дела, которое мы не сможем.';
        }       
        else{
            $this->süz = "Без осталар. Йортлар салабыз, җиһаз, баскычлар, ишекләр ясыйбыз. Барлык эшләребезгә гарантия бирәбез.
            Без булдыралмаслык эш юк.";
        }
    }
    
    public function barysynQaraw(){
        switch ($this->tele){
            case 'tt': return 'барысын карайым'; //break;
            case 'ru': return 'смотреть всё'; //break;
        }
    }
    
    public function zayavkaJibərü(){
        if($this->tele=='tt'){
            return 'Заявка җибәрергә';
        }
        return 'Отправить заявку';
    }
    
    public function address(){
        if($this->tele=='tt'){
            return 'Казан';
        }
        return 'Казань';
    }
    
    /*public function bəyə($tör){
        switch ($tör){
            case:
        }
    }*/
}

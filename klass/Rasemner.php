<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rəsemnər
 *
 * @author mansur
 */
class Rəsemnər {
    //put your code here
    public $july;
    public $jyyylmasy;
    public $rəseme;
    public $zurlary = [];
    public $kechkenələre = [];

    public function __construct($url) {
        if(isset($url[2]) || in_array($_SERVER['REQUEST_URI'],array('/','/ru','/tt','/ru/','/tt/')))
        {
            if(isset($url[2])){
                if(in_array($url[2],array('лестницы','баскычлар')))  {
                    $this->july = 'rasem/basqych';
                    $this->rəseme = "http://ostalar.tk/rasem/basqych/2-1.png";
                }
                else if(in_array($url[2],array('мебель','җиһаз'))) {   
                    $this->july = 'rasem/cihaz';
                    $this->rəseme = "http://ostalar.tk/rasem/cihaz/4eb8aeb7ca37ec6a6500000b.png";
                }
                else if(in_array($url[2],array('металлконструкции','металлконструкцияләр'))){
                    $this->july = 'rasem/mk';
                    $this->rəseme = "http://ostalar.tk/rasem/mk/11.jpg";
                }
                else if(in_array($url[2],array('двери','ишекләр'))){
                    $this->july = 'rasem/ishek';
                    $this->rəseme = "http://ostalar.tk/rasem/ishek/32.png";
                }
                else if(in_array($url[2],array('дома','йортлар'))){
                    $this->july = 'rasem/yort';
                    $this->rəseme = "http://ostalar.tk/rasem/yort/0797.jpg";
                }
                else if(in_array($_SERVER['REQUEST_URI'],array('/','/ru','/tt','/ru/','/tt/'))){
                    $this->july = 'rasem/yort';
                    $this->rəseme = "http://ostalar.tk/rasem/basqych/2-1.png";
                }
            } else {
                if(in_array($_SERVER['REQUEST_URI'],array('/','/ru','/tt','/ru/','/tt/'))){
                    $this->july = 'rasem/yort';
                    $this->rəseme = "http://ostalar.tk/rasem/basqych/2-1.png";
                }
            }
            if($this->july) {
                $this->jyyylmasy = opendir($this->july);
                while (false !== ($rasem = readdir($this->jyyylmasy))){
                    if($rasem!='.'&& $rasem!='..'){
                    $this->zurlary[] = "/".$this->july."/".$rasem;
                        $this->kechkenələre[] = "/".str_replace("/","/kechkena/",$this->july)."/".$rasem;
                    }
                }
            }		
        }
        /*else {
            unset($url[2]);
        }*/
    }
}

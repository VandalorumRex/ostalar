<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kontaktlar
 *
 * @author mansur
 */
class Kontaktlar {
    //put your code here
    const SANY      = 2;
    
    const ILNAR     = 1;
    const RAFAEL    = 2;
    
    static $ÜZLƏRE = [
        'ru'    =>  "КОНТАКТЫ",
        'tt'    =>  "КОНТАКТЛАРЫБЫЗ"
    ];
    static $QYSQALARY = [
        self::ILNAR     => '245-48-03',
        self::RAFAEL    => '249-14-02'
    ];
    static $OZYNNARY = [
        self::ILNAR     => '+79376154803',
        self::RAFAEL    => '+79272491402'
    ];
}

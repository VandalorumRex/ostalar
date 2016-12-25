<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Toerler
 *
 * @author mansur
 */
class Törlər {
    //put your code here
    const SANY      = 5;
    const BASH_BIT  = 0;
    const YORTLAR   = 1;
    const BASQYCHLAR= 2;
    const CIHAZ     = 3;
    const MK        = 4;
    const ISHEKLƏR  = 5;
    static $ÜZLƏRE = [
        'ru'    =>  "КАТЕГОРИИ",
        'tt'    =>  "КАТЕГОРИЯЛӘР"
    ];
    static $ISEMNƏRE = [
        'ru' => [
            self::BASH_BIT  => '',
            self::YORTLAR   => 'ДОМА',
            self::BASQYCHLAR=> 'ЛЕСТНИЦЫ',
            self::CIHAZ     => 'МЕБЕЛЬ',
            self::MK        => 'МЕТАЛЛКОНСТРУКЦИИ',
            self::ISHEKLƏR  => 'ДВЕРИ'
        ],
        'tt' => [
            self::BASH_BIT  => '',
            self::YORTLAR   => 'ЙОРТЛАР',
            self::BASQYCHLAR=> 'БАСКЫЧЛАР',
            self::CIHAZ     => 'ҖИҺАЗ',
            self::MK        => 'МЕТАЛЛКОНСТРУКЦИЯЛӘР',
            self::ISHEKLƏR  => 'ИШЕКЛӘР'
        ]
    ];
    static $JULLARY = [
        'ru' => [
            self::BASH_BIT  => '/ru',
            self::YORTLAR   => '/ru/дома',
            self::BASQYCHLAR=> '/ru/лестницы',
            self::CIHAZ     => '/ru/мебель',
            self::MK        => '/ru/металлконструкции',
            self::ISHEKLƏR  => '/ru/двери'
        ],
        'tt' => [
            self::BASH_BIT  => '/tt',
            self::YORTLAR   => '/tt/йортлар',
            self::BASQYCHLAR=> '/tt/баскычлар',
            self::CIHAZ     => '/tt/җиһаз',
            self::MK        => '/tt/металлконструкцияләр',
            self::ISHEKLƏR  => '/tt/ишекләр'
        ]
    ];
    
    static $BƏYƏLƏRE = [
        'ru' => [
            
            self::YORTLAR   => 'от 200 тыс.',
            self::BASQYCHLAR=> 'от 25 тыс.',
            self::CIHAZ     => 'от 20 тыс.',
            self::MK        => 'от 15 тыс.',
            self::ISHEKLƏR  => 'от 10 тыс.'
        ],
        'tt' => [
            
            self::YORTLAR   => '200 меңнән',
            self::BASQYCHLAR=> '25 меңнән',
            self::CIHAZ     => '20 меңнән',
            self::MK        => '15 меңнән',
            self::ISHEKLƏR  => '10 меңнән'
        ]
    ];


    static function isemnənIdAlu($isem){
        //echo $isem;
        $ISEM = mb_strtoupper($isem,'UTF-8'); //echo $ISEM;
        if(in_array($ISEM,self::$ISEMNƏRE['ru'])){
            $idlar = array_flip(self::$ISEMNƏRE['ru']); //print_r($idlar);
            return $idlar[$ISEM];
        } else {
            $idlar = array_flip(self::$ISEMNƏRE['tt']); //print_r($idlar);
            return $idlar[$ISEM];
        }
    }
}

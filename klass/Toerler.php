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
            self::YORTLAR   => 'ДОМА',
            self::BASQYCHLAR=> 'ЛЕСТНИЦЫ',
            self::CIHAZ     => 'МЕБЕЛЬ',
            self::MK        => 'МЕТАЛЛКОНСТРУКЦИИ',
            self::ISHEKLƏR  => 'ДВЕРИ'
        ],
        'tt' => [
            self::YORTLAR   => 'ЙОРТЛАР',
            self::BASQYCHLAR=> 'БАСКЫЧЛАР',
            self::CIHAZ     => 'ҖИҺАЗ',
            self::MK        => 'МЕТАЛЛКОНСТРУКЦИЯЛӘР',
            self::ISHEKLƏR  => 'ИШЕКЛӘР'
        ]
    ];
    static $JULLARY = [
        'ru' => [
            self::YORTLAR   => '/ru/дома',
            self::BASQYCHLAR=> '/ru/лестницы',
            self::CIHAZ     => '/ru/мебель',
            self::MK        => '/ru/металлконструкции',
            self::ISHEKLƏR  => '/ru/двери'
        ],
        'tt' => [
            self::YORTLAR   => '/tt/йортлар',
            self::BASQYCHLAR=> '/tt/баскычлар',
            self::CIHAZ     => '/tt/җиһаз',
            self::MK        => '/tt/металлконструкцияләр',
            self::ISHEKLƏR  => '/tt/ишекләр'
        ]
    ];
}

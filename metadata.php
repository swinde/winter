<?php
/**
 * @package       flowcat
 * @category      module
 * @author        Steffen Winde
 * @link          http://winde-ganzig.de/
 * @licenses      GNU GENERAL PUBLIC LICENSE. More info can be found in LICENSE file.
 * @copyright (C] OXID e-Sales, 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'           => 'winter',
    'title'       => [
        'de' => '.BEES | Lass es schneien',
        'en' => '.BEES | let it Snow',
    ],
    'description' => [
        'de' => 'Sc',
        'en' => 'Snow',
    ],
    'thumbnail'     => '',
    'version'       => '1.0.0',
    'author'        => 'Steffen Winde',
    'url'           => 'https://internetservice.winde-ganzig.de',
    'email'         => 'inserv@winde-ganzig.de',
    'blocks' => [
        [
            'template'=> 'layout/base.tpl',
            'block'=>'base_js',
            'file'=>'/views/blocks/winter_base_js.tpl'
        ]
    ],
];

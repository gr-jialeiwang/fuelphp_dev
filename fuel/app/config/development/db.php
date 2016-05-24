<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
//    'default' => array(
//        'connection'  => array(
//            'dsn'        => 'mysql:host=localhost;dbname=fuel_dev',
//            'username'   => 'root',
//            'password'   => 'root',
//        ),
//        'profiling'  => true,
//    ),

    'default' => array(
        'type' => 'mysqli',
        'connection' => array(
            'hostname' => 'localhost',
            'database' => 'fuel_dev',
            'username' => 'root',
            'password' => 'root',
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'profiling' => true,
    ),

//    'slave' => array(
//        'type' => 'mysqli',
//        'connection' => array(
//            'hostname' => 'localhost',
//            'database' => 'fuel_dev',
//            'username' => 'root',
//            'password' => 'root',
//        ),
//        'table_prefix' => '',
//        'charset' => 'utf8',
//        'profiling' => true,
//    ),

);

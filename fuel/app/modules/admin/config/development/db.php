<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'slave' => array(
        'type' => 'mysqli',
        'connection' => array(
            'hostname' => 'localhost',
            'database' => 'fuel_dev_admin',
            'username' => 'root',
            'password' => 'root',
        ),
        'table_prefix' => '',
        'charset' => 'utf8',
        'profiling' => true,
    ),
);

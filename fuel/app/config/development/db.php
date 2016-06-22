<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
    'default' => array(
        'type' => 'mysqli',
        'connection'  => array(
            'hostname'  => 'localhost',
            'port'      => '3306',
            'database'  => 'fuelphp',
            'username'  => 'root',
            'password'  => '',
        ),
        'table_prefix'   => 'th_',
        'charset'        => 'utf8',
        'enable_cache'   => true,
    ),
);

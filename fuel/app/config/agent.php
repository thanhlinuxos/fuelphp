<?php

return array(
    'browscap' => array(
        'enabled' => TRUE,
        'url'     => 'http://browscap.org/stream?q=BrowsCapINI',
        'method' => 'wrapper',
        'proxy' => array(
            'host' => null,
            'port' => null,
            'auth' => 'none',
            'username' => null,
            'password' => null,
        ),
        'file'   => APPPATH . 'php_browscap.ini'
    ),
    'cache' => array(
        'driver'     => '',
        'expiry'     => 604800,
        'identifier' => 'fuel.agent',
    )
);

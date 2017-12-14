<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new Slim\App([
    'settings'  => [
        'displayErrorDetails' => true,
        'db' => [
            'driver'      => 'mysql',
            'host'        => 'localhost',
            'database'    => 'database',
            'username'    => 'root',
            'password'    => '',
            'charset'     => 'utf8',
            'collaction'  => 'utf8_unicode_ci',
            'prefix'      => ''
        ]
    ]
]);

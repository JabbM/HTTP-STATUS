<?php
    $routes = array(
        'httpstatus' => [
            'home' => '/',
            'show_value' => [
                '/show-value/{first_value}/',
                '/show-value/{first_value}/{second_value}/',
            ],
            'login' => '/login',
            'admin' => '/admin',
            'edit' => '/admin/edit/{value}',
            'delete' => '/admin/delete/{value}'
        ],
    );

    define('ROUTES', $routes);
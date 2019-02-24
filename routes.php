<?php
    $routes = array(
		'Index' => [
			'home' => '/',
			'login' => '/login',
			'show_value' => [
				'/show-value/{first_value}/',
				'/show-value/{first_value}/{second_value}/',
			],
			'admin' => '/admin',
			'edit' => '/admin/edit/{value}',
			'delete' => '/admin/delete/{value}'
        ],
    );

    define('ROUTES', $routes);

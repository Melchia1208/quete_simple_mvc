<?php
// routing.php
$routes = [
    'Item' => [ // Controller
        ['index', '/', 'GET'], // action, url, HTTP method
        ['show', '/item/{id}', 'GET'], // action, url, HTTP method
        ['add', '/items/add', ['GET', 'POST']],
        ['edit', '/items/edit/{id}', ['GET', 'POST']],
        ['delete', '/items/delete/{id}', ['GET', 'POST']],
    ],
    'Categories' => [ // Controller
        ['index', '/category', 'GET'], // action, url, HTTP method
        ['show', '/category/{id}', 'GET'], // action, url, HTTP method
        ['add', '/categorys/add', ['GET', 'POST']],
        ['edit', '/categorys/edit/{id}', ['GET', 'POST']],
    ],
];

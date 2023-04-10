<?php

return [
    '/' => [
        'controller' => 'MainController',
        'action' => 'render',
    ],
    '/contact' => [
        'controller' => 'ContactController',
        'action' => 'render',
    ],
    '/portfolio' => [
        'controller' => 'PortfolioController',
        'action' => 'render',
    ],
    '/adm1n' => [
        'controller' => 'AdminController',
        'action' => 'render',
    ],
    '/snc' => [
        'controller' => 'AdminController',
        'action' => 'initialize',
    ],
    '/search' => [
        'controller' => 'SearchController',
        'action' => 'render',
    ],
];
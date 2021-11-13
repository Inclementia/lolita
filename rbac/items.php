<?php

return [
    'adminPanel' => [
        'type' => 2,
        'description' => 'Админ панель',
    ],
    'user' => [
        'type' => 1,
        'description' => 'Пользователь',
    ],
    'moder' => [
        'type' => 1,
        'description' => 'Модератор',
        'children' => [
            'user',
            'adminPanel',
        ],
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Администратор',
        'children' => [
            'moder',
        ],
    ],
];

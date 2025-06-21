<?php

return [
    'default-src' => [
        'self',
    ],
    'script-src' => [
        'self',
        'unsafe-inline' => false,
        'unsafe-eval' => false,
    ],
    'style-src' => [
        'self',
        'unsafe-inline' => false,
    ],
    'img-src' => [
        'self',
        'data:',
        'unsafe-inline' => false,
    ],
];

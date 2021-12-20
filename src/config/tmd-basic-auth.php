<?php

return [
    'debug_only' => env('TMD_BSA_DEBUG_ONLY', true),
    'default' => [
        'username' => env('TMD_BSA_USERNAME', 'admin'),
        'password' => env('TMD_BSA_PASSWORD', 'admin'),
    ],
    // 'admin' => [
    //     'username' => 'newusername',
    //     'password' => 'newpassword',
    // ],
];
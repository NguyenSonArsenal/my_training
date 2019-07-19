<?php

return [
    // auth
    'backend_alias' => env('BACKEND_ALIAS', 'admin'),
    'frontend_alias' => env('FRONTEND_ALIAS', 'admin'),

    'created_at_column' => 'ins_datetime',
    'updated_at_column' => 'upd_datetime'
];

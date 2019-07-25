<?php

return [
    // auth
    'backend_alias' => env('BACKEND_ALIAS', 'admin'),
    'frontend_alias' => env('FRONTEND_ALIAS', 'admin'),

    'created_at_column' => 'ins_datetime',
    'updated_at_column' => 'upd_datetime',
    'deleted_at_column' => 'del_flag',
    'created_by_column' => 'ins_id',
    'updated_by_column' => 'upd_id'
];

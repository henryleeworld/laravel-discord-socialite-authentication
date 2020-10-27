<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Language Lines
    |--------------------------------------------------------------------------
    */
    'api_token' => [
        'title'     => 'API 權杖',
        'statement' => '請複製您的新 API 權杖。為了安全起見，不會再顯示它。',
        'content' => [
            'close' => '關閉',
        ],
    ],
    'api_token_permissions' => [
        'title'       => 'API 權杖權限',
        'content' => [
            'nevermind' => '沒關係',
            'save'      => '儲存',
        ],
    ],
    'api_tokens' => [
        'title' => 'API 權杖',
    ],
    'create_api_token' => [
        'title'       => '新增 API 權杖',
        'description' => 'API 權杖允許第三方服務代表您向我們的應用程式進行身份驗證。',
        'content' => [
            'create'      => '新增',
            'created'     => '已新增。',
            'permissions' => '權杖',
            'token_name'  => '權杖名稱',
        ],
    ],
    'delete_api_token' => [
        'title'     => '刪除 API 權杖',
        'statement' => '您確定要刪除此 API 權杖嗎？',
        'content' => [
            'delete'    => '刪除',
            'nevermind' => '沒關係',
        ],
    ],
    'manage_api_tokens' => [
        'title'       => '管理 API 權杖',
        'description' => '如果不再需要任何現有權杖，則可以刪除它們。',
        'content' => [
            'delete'      => '刪除',
            'permissions' => '權限',
        ],
    ],
];

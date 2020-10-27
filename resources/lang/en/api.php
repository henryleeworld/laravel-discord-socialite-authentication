<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Language Lines
    |--------------------------------------------------------------------------
    */
    'api_token' => [
        'title'     => 'API Token',
        'statement' => 'Please copy your new API token. For your security, it won\'t be shown again.',
        'content' => [
            'close' => 'Close',
        ],
    ],
    'api_token_permissions' => [
        'title'       => 'API Token Permissions',
        'content' => [
            'nevermind' => 'Nevermind',
            'save'      => 'Save',
        ],
    ],
    'api_tokens' => [
        'title' => 'API Tokens',
    ],
    'create_api_token' => [
        'title'       => 'Create API Token',
        'description' => 'API tokens allow third-party services to authenticate with our application on your behalf.',
        'content' => [
            'create'      => 'Create',
            'created'     => 'Created.',
            'permissions' => 'Permissions',
            'token_name'  => 'Token Name',
        ],
    ],
    'delete_api_token' => [
        'title'     => 'Delete API Token',
        'statement' => 'Are you sure you would like to delete this API token?',
        'content' => [
            'delete'    => 'Delete',
            'nevermind' => 'Nevermind',
        ],
    ],
    'manage_api_tokens' => [
        'title'       => 'Manage API Tokens',
        'description' => 'You may delete any of your existing tokens if they are no longer needed.',
        'content' => [
            'delete'      => 'Delete',
            'permissions' => 'Permissions',
        ],
    ],
];

<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Global Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'dashboard' => [
        'title' => '儀表板',
    ],
    'login' => [
        'title'   => '登入',
        'content' => [
            'email'       => '電子郵件',
            'password'    => '密碼',
            'remember_me' => '記住我',
        ],
    ],
    'forgot_your_password' => [
        'title'     => '忘記您的密碼？',
        'statement' => '忘記密碼了嗎？沒問題。只要讓我們知道您的電子郵件地址，我們就會通過電子郵件將密碼重置連結發送給您，該連結將使您可以選擇一個新的密碼。',
        'content'   => [
            'email_password_reset_link' => '電子郵件密碼重置連結',
        ],
    ],
    'logout' => [
        'title' => '登出',
    ],
    'profile' => [
        'title' => '個人資料',
    ],
    'register' => [
        'title'   => '註冊',
        'content' => [
            'already_registered' => '已經註冊？',
            'confirm_password'   => '確認密碼',
            'email'              => '電子郵件',
            'name'               => '姓名',
            'password'           => '密碼',
        ],
    ],
    'reset_password' => [
        'title'   => '重設密碼',
        'content' => [
            'confirm_password'   => '確認密碼',
            'email'              => '電子郵件',
            'password'           => '密碼',
        ],
    ],
    'two_factor_challenge' => [
        'statement' => [
            'entering_the_authentication_code_provided'     => '請輸入您的身份驗證器應用程式提供的身份驗證碼，以確認對您帳號的訪問權限。',
            'entering_one_of_your_emergency_recovery_codes' => '請輸入您的緊急恢復代碼之一，以確認對您帳號的訪問權限。',
        ],
        'content' => [
            'code'                       => '代碼',
            'login'                      => '登入',
            'recovery_code'              => '恢復代碼',
            'use_an_authentication_code' => '使用驗證碼',
            'use_a_recovery_code'        => '使用恢復代碼',
        ],
    ],
    'verify_email' => [
        'statement' => [
            'a_new_verification_link' => '新的驗證連結已發送到您在註冊過程中提供的電子郵件地址。',
            'thanks_for_signing_up'   => '感謝您的註冊！在開始之前，您可以通過點擊我們剛剛發送給您的連結來驗證您的電子郵件地址嗎？如果您沒有收到電子郵件，我們將很樂意發送給您。',
        ],
        'content' => [
            'logout'                    => '登出',
            'resend_verification_email' => '重新發送驗證電子郵件',
        ],
    ],
];

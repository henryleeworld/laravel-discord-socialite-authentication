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
        'title' => 'Dashboard',
    ],
    'login' => [
        'title'   => 'Login',
        'content' => [
            'email'       => 'Email',
            'password'    => 'Password',
            'remember_me' => 'Remember me',
        ],
    ],
    'forgot_your_password' => [
        'title'     => 'Forgot your password?',
        'statement' => 'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
        'content'   => [
            'email_password_reset_link' => 'Email Password Reset Link',
        ],
    ],
    'logout' => [
        'title' => 'Logout',
    ],
    'profile' => [
        'title' => 'Profile',
    ],
    'register' => [
        'title'   => 'Register',
        'content' => [
            'already_registered' => 'Already registered?',
            'confirm_password'   => 'Confirm Password',
            'email'              => 'Email',
            'name'               => 'Name',
            'password'           => 'Password',
        ],
    ],
    'reset_password' => [
        'title'   => 'Reset Password',
        'content' => [
            'confirm_password'   => 'Confirm Password',
            'email'              => 'Email',
            'password'           => 'Password',
        ],
    ],
    'two_factor_challenge' => [
        'statement' => [
            'entering_the_authentication_code_provided'     => 'Please confirm access to your account by entering the authentication code provided by your authenticator application.',
            'entering_one_of_your_emergency_recovery_codes' => 'Please confirm access to your account by entering one of your emergency recovery codes.',
        ],
        'content' => [
            'code'                       => 'Code',
            'login'                      => 'Login',
            'recovery_code'              => 'Recovery Code',
            'use_an_authentication_code' => 'Use an authentication code',
            'use_a_recovery_code'        => 'Use a recovery code',
        ],
    ],
    'verify_email' => [
        'statement' => [
            'a_new_verification_link' => 'A new verification link has been sent to the email address you provided during registration.',
            'thanks_for_signing_up'   => 'Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.',
        ],
        'content' => [
            'logout'                    => 'Logout',
            'resend_verification_email' => 'Resend Verification Email',
        ],
    ],
];

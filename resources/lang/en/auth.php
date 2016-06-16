<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'page' => [
        'register' => [
            'header' => [
                'title' => 'Register',
            ]
        ],
        'login' => [
            'header' => [
                'title' => 'Login',
            ],
            'forgot_password' => 'Forgot Your Password?',
        ],
    ],
    'form' => [
        'common' => [
            'name' => [
                'label' => 'Name',
            ],
            'email' => [
                'label' => 'E-Mail Address',
            ],
            'password' => [
                'label' => 'Password',
            ],
            'password_confirm' => [
                'label' => 'Confirm Password',
            ],
        ],
        'register' => [
            'submit' => 'Register',
        ],
        'login' => [
            'submit' => 'Login',
            'remember_me' => 'Remember Me',
        ],
    ],
    'failed' => 'These credentials do not match our records.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

];

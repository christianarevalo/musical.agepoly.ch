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
                'title' => 'Créer un Compte',
            ]
        ],
        'login' => [
            'header' => [
                'title' => 'Login',
            ],
            'forgot_password' => 'Mot de passe oublié?',
        ],
    ],
    'form' => [
        'common' => [
            'name' => [
                'label' => 'Nom',
            ],
            'email' => [
                'label' => 'Adresse Email',
            ],
            'password' => [
                'label' => 'Mot de Passe',
            ],
            'password_confirm' => [
                'label' => 'Confirmer le Mot de Passe',
            ],
        ],
        'register' => [
            'submit' => 'S\'enregistrer',
        ],
        'login' => [
            'submit' => 'Se connecter',
            'remember_me' => 'Se souvenir de moi',
        ],
    ],
    'failed' => 'Ces identifiants ne correspondent pas à nos enregistrements',
    'throttle' => 'Trop de tentatives de connexion. Veuillez essayer de nouveau dans :seconds secondes.',

];

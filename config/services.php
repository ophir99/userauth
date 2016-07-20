<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '657306654426399',
        'client_secret' => '99136c019209d1f4d6ec57d782402f1c',
        'redirect' => 'http://www.ctrlcplusctrlv.com',
    ],

    'google' => [
        'client_id' => '464922854033-r23hvaoh3d6530fbtrpbt5p1k7i69n7c.apps.googleusercontent.com',
        'client_secret' => 'p1etxLbX4P1jalwH9dKB2MVE',
        'redirect' => 'http://www.ctrlcplusctrlv.com',
    ],

];

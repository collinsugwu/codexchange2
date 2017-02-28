<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
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
    'client_id' => '1914027108827216',
    'client_secret' => '6105450c141d4326d2c0d670cf91bfda',
    'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'twitter' => [
    'client_id' => 'C6QPTDfx3z2mmDnKVwL2TFNvC',
    'client_secret' => 'TwTi8Pfa4tDcWi0W3DyvwzGw8RavLTjHVZhllZtairVYg9OydA',
    'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],
];

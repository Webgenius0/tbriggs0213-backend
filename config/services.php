<?php

return [
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses'      => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend'   => [
        'key' => env('RESEND_KEY'),
    ],

    'slack'    => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel'              => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'google'   => [
        'client_id'     => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect'      => env('GOOGLE_REDIRECT_URI'),
    ],

    'apple'    => [
        'client_id'   => env('APPLE_CLIENT_ID'),
        'team_id'     => env('APPLE_TEAM_ID'),
        'key_id'      => env('APPLE_KEY_ID'),
        'private_key' => file_get_contents(storage_path(env('APPLE_PRIVATE_KEY'))),
        'redirect'    => env('APPLE_REDIRECT_URI'),
    ],
];

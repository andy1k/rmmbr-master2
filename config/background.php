<?php
return [
    // Your Logo Settings
    'logo' => [
        'text' => env('LOGO_TEXT', ''),
        'font' => env('LOGO_FONT', '')
    ],

    // Your Social Media Links
    'social_media' => [
        'facebook' => env('SOCIAL_FACEBOOK', ''),
        'soundcloud' => env('SOCIAL_SOUNDCLOUD',''),
        'github' => env('SOCIAL_GITHUB', ''),
        'linkedin' => env('SOCIAL_LINKEDIN', ''),
        'instagram' => env('SOCIAL_INSTAGRAM', ''),
        'snapchat' => env('SOCIAL_SNAPCHAT', ''),
        'spotify' => env('SOCIAL_SPOTIFY', ''),
        'steam' => env('SOCIAL_STEAM', '')
    ],

    // Client ID and Soundcloud Username
    'soundcloud' => [
        'content' => env('SOUNDCLOUD_CONTENT', ''),
        'client_id' =>  env('SOUNDCLOUD_CLIENT_ID', '')
    ]
];
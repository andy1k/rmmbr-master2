<?php

namespace App\Http\Controllers;

use \Config;

class WelcomeController extends Controller
{
    public function show()
    {
        // Remove empty Social Media links
        $menu = Config::get('background.social_media');
        foreach ($menu as $media => $url)
        {
            if ($url == '')
            {
                unset($menu[$media]);
            }
        }

        // Return view with data
        return view('welcome', [
            'soundcloud' => Config::get('background.soundcloud'),
            'menu' => $menu
        ]);
    }
}

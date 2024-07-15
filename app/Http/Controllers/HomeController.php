<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $weburl = [
            'google' => 'https://www.google.com',
            'facebook' => 'https://www.facebook.com',
            'youtube' => 'https://www.youtube.com'
        ];

        $desc = 'Please visit the following url';

        return view('social_link', compact('weburl', 'desc'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function bible()
    {
        return view('web.home');
    }

    public function knowingGod()
    {
        return view('web.home');
    }

    public function groups()
    {
        return view('web.shepherd-groups');
    }

    public function sermonAudio()
    {
        return view('web.home');
    }

    public function about()
    {
        return view('web.home');
    }

    public function contact()
    {
        return view('web.home');
    }

    public function events()
    {
        return view('web.home');
    }

    public function singleEvent(Event $event)
    {
        return view('web.home');
    }
}

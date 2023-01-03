<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Menu;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public $topLevelMenuItems;

    public function __construct()
    {
        $this->topLevelMenuItems = Menu::where('is_top_level', 1)->whereNull('parent_id')->orderBy('order', 'ASC')->get();
    }

    public function home()
    {
        return view('web.home', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function groups()
    {
        return view('web.shepherd-groups', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function sermonAudio()
    {
        return view('web.home', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function about()
    {
        return view('web.home', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function contact()
    {
        return view('web.home', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function events()
    {
        return view('web.home', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function singleEvent(Event $event)
    {
        return view('web.home', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function showArticle($slug)
    {
        return view('web.articles.show', [
            'article' => Article::where('slug', $slug)->firstOrFail(),
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }
}

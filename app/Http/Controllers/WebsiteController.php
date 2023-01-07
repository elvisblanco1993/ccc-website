<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Menu;
use App\Models\ReadingPlan;
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

    public function bibleReadingPlan()
    {
        return view('web.bible-reading-plan', [
            'topLevelMenuItems' => $this->topLevelMenuItems,
            'plan' => ReadingPlan::whereDate('starts_at', '<=', now())->whereDate('ends_at', '>', now())->first()
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
        return view('web.sermon-audio', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function about()
    {
        return view('web.about', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function missionPartners()
    {
        return view('web.mission-partners', [
            'topLevelMenuItems' => $this->topLevelMenuItems
        ]);
    }

    public function contact()
    {
        return view('web.contact-us', [
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
        return view('web.event', [
            'topLevelMenuItems' => $this->topLevelMenuItems,
            'event' => $event
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

<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.article.index', [
            'articles' => Article::orderBy('date', 'desc')->get()
        ]);
    }
}

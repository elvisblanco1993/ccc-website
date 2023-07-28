<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use Livewire\Component;

class Options extends Component
{
    public $slideover, $article;

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->comments = $this->article->comments;
    }

    public function setComments()
    {
        ($this->article->comments == 1)
            ? $this->article->comments = 0
            : $this->article->comments = 1;
        $this->article->update();
    }

    public function render()
    {
        return view('livewire.article.options');
    }
}

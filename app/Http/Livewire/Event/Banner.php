<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;

class Banner extends Component
{
    public $modal, $event;

    public function mount()
    {
        $this->event = Event::whereNotNull('display_alert_from')
            ->where('display_alert_from', '<', now())
            ->where('display_alert_to', '>', now())
            ->first();
    }

    public function render()
    {
        return view('livewire.event.banner');
    }
}

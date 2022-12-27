<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Delete extends Component
{
    public $modal;

    public function mount(Event $event)
    {
        $this->event = $event;
    }

    public function render()
    {
        return view('livewire.event.delete');
    }

    public function delete()
    {
        try {
            $this->event->delete();
            session()->flash('flash.banner', 'Event deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('events');
    }
}

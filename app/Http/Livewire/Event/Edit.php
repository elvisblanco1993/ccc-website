<?php

namespace App\Http\Livewire\Event;

use Carbon\Carbon;
use App\Models\Event;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Edit extends Component
{
    public  $modal;
    public  $name,
            $description,
            $date,
            $address,
            $display_alert_from,
            $display_alert_to;

    public function mount(Event $event)
    {
        $this->event = $event;
        $this->name = $this->event->name;
        $this->description = $this->event->description;
        $this->date = $this->event->date;
        $this->address = $this->event->address;
        $this->display_alert_from = $this->event->display_alert_from;
        $this->display_alert_to = $this->event->display_alert_to;
    }

    public function render()
    {
        return view('livewire.event.edit');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'date' => 'required|date',
            'address' => 'required',
        ]);


        try {
            $this->event->update([
                'name' => $this->name,
                'description' => $this->description,
                'date' => Carbon::parse($this->date)->toDateTime(),
                'address' => $this->address,
                'display_alert_from' => Carbon::parse($this->display_alert_from)->toDateTime(),
                'display_alert_to' => Carbon::parse($this->display_alert_to)->toDateTime(),
            ]);
            session()->flash('flash.banner', 'Event saved!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('events');
    }
}

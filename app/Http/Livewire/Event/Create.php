<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public  $modal;
    public  $name,
            $description,
            $banner,
            $date,
            $address,
            $display_alert_from,
            $display_alert_to;

    public function render()
    {
        return view('livewire.event.create');
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'date' => 'required|date',
            'address' => 'required',
        ]);


        try {
            $banner = null;
            if ($this->banner) {
                $banner = $this->banner->store('photos');
            }
            Event::create([
                'name' => $this->name,
                'description' => $this->description,
                'banner' => $banner,
                'date' => $this->date,
                'address' => $this->address,
                'display_alert_from' => $this->display_alert_from,
                'display_alert_to' => $this->display_alert_to,
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

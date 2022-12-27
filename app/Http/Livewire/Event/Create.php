<?php

namespace App\Http\Livewire\Event;

use App\Models\Event;
use Carbon\Carbon;
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

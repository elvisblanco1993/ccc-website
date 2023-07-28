<?php

namespace App\Http\Livewire\ReadingPlan;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ReadingPlan;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Create extends Component
{
    use WithFileUploads;

    public $modal, $file, $name, $starts_at, $ends_at;

    public function save()
    {
        $this->validate([
            'file' => 'required|file|mimes:pdf',
            'name' => 'required',
            'starts_at' => 'required',
            'ends_at' => 'required',
        ]);

        try {
            ReadingPlan::create([
                'name' => $this->name,
                'url' => $this->file->store('documents'),
                'starts_at' => Carbon::parse($this->starts_at)->startOfDay(),
                'ends_at' => Carbon::parse($this->ends_at)->endOfDay(),
            ]);
            session()->flash('flash.banner', 'Plan successfully uploaded!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.readingPlans');
    }

    public function render()
    {
        return view('livewire.reading-plan.create');
    }
}

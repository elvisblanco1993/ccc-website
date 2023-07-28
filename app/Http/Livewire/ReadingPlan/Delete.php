<?php

namespace App\Http\Livewire\ReadingPlan;

use Livewire\Component;
use App\Models\ReadingPlan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $modal, $readingPlan;

    public function mount(ReadingPlan $readingPlan)
    {
        $this->readingPlan = $readingPlan;
    }

    public function delete()
    {
        try {
            Storage::delete($this->readingPlan->url);
            $this->readingPlan->delete();
            session()->flash('flash.banner', 'Plan successfully deleted!');
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
        return view('livewire.reading-plan.delete');
    }
}

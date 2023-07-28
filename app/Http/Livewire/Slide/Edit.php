<?php

namespace App\Http\Livewire\Slide;

use Carbon\Carbon;
use App\Models\Slide;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $modal, $slide, $title, $bg_image, $content, $btn_label, $btn_link, $start_at, $end_at, $is_enabled;

    public function mount(Slide $slide)
    {
        $this->slide = $slide;
        $this->title = $this->slide->title;
        $this->content = $this->slide->content;
        $this->btn_label = $this->slide->btn_label;
        $this->btn_link = $this->slide->btn_link;
        $this->start_at = $this->slide->start_at;
        $this->end_at = $this->slide->end_at;
        $this->is_enabled = $this->slide->is_enabled;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
        ]);

        try {
            $this->slide->update([
                'title' => $this->title,
                'bg_image' => ($this->bg_image) ? $this->bg_image->store('photos') : $this->slide->bg_image,
                'content' => $this->content,
                'btn_label' => $this->btn_label,
                'btn_link' => $this->btn_link,
                'start_at' => $this->start_at,
                'end_at' => $this->end_at,
                'is_enabled' => (!$this->is_enabled && ($this->start_at && Carbon::now()->gte($this->start_at))) ? 1 : 0,
            ]);

            if ($this->is_enabled) {
                $this->slide->update(['is_enabled' => 1]);
            }


            session()->flash('flash.banner', 'Slide successfully added!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'error');
        }
        return redirect()->route('admin.slides');
    }

    public function render()
    {
        return view('livewire.slide.edit');
    }
}

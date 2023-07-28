<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class Delete extends Component
{
    public $modal, $contact;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function delete()
    {
        try {
            $this->contact->delete();
            session()->flash('flash.banner', 'inquiry deleted!');
            session()->flash('flash.bannerStyle', 'success');
        } catch (\Throwable $th) {
            Log::error($th);
            session()->flash('flash.banner', $th->getMessage());
            session()->flash('flash.bannerStyle', 'danger');
        }
        return redirect()->route('admin.web-inquiries');
    }

    public function render()
    {
        return view('livewire.contact.delete');
    }
}

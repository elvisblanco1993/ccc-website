<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class Show extends Component
{
    public $contact, $modal;

    public function mount(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function render()
    {
        return view('livewire.contact.show');
    }
}

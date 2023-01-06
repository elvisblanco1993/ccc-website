<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendWebsiteInquiryEmail;

class Create extends Component
{
    public $name, $email, $phone, $message;

    public function save()
    {
        $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'message' => 'required|min:50',
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        Mail::to("info@christcomchurch.org")->send(new SendWebsiteInquiryEmail());

        session()->flash('message', 'We have received your message!');
    }

    public function render()
    {
        return view('livewire.contact.create');
    }
}

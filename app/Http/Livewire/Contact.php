<?php

namespace App\Http\Livewire;

use App\Models\ContactMessage;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $feedback_message = '';
 
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required|string',
    ];
    protected $listeners = ['contactSubmit' => 'render'];

    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
        
        $contact = new ContactMessage();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->subject = $this->subject;
        $contact->message = $this->message;
        $contact->save();
        $this->feedback_message = "Your message submitted successfully.";
        $this->name = "";
        $this->email = "";
        $this->subject = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.contact')
            ->extends('frontend.layout', [
                'title' => 'contact',
                'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
            ]);
    }
}

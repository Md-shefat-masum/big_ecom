<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public function render()
    {
        return view('livewire.checkout')
        ->extends('frontend.layout', [
            'title' => 'Checkout',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
}

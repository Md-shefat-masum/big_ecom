<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = Category::where('parent_id', 0)->select('id', 'name')->get();
        return view('livewire.home')
        ->extends('frontend.layout', [
            'title' => 'login',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
}

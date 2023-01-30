<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{
    public $search;
    public $categories;

    public function search()
    {
        
    }

    public function render()
    {
        $this->categories = Category::where('parent_id', 0)->select('id', 'name')->get();
  
        return view('livewire.home')
        ->extends('frontend.layout', [
            'meta' => [],
        ]);
    }
}

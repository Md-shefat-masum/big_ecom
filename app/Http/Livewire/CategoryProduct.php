<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CategoryProduct extends Component
{
    
    public $products;

    public function mount($id)
    {
        $this->products = Product::where('category',$id)->get();
    }

    public function render()
    {
        return view('livewire.category-product', [
            'products' => $this->products,
        ])
        ->extends('frontend.layout', [
            'title' => 'Category wise Products',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
}

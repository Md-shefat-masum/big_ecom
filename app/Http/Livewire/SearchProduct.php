<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SearchProduct extends Component
{
    public $products;

    public function mount($search)
    {
        $this->products = Product::where($search);
    }

    public function render()
    {
        return view('livewire.search-product');
    }
}

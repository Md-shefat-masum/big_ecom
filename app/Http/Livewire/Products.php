<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public $products;
    public function render()
    {
        $this->products = Product::latest()->take(10)->paginate(10);
        return view('livewire.products');
    }
}

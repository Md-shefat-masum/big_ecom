<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Product;
use Livewire\Component;

class QuickViewProduct extends Component
{
    // public $product;
    // public function mount($product)
    // {
    //     $this->product = $product;
    // }
    public function render()
    {
        return view('livewire.quick-view-product');
    }
    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        session()->flash('message', 'Post successfully updated.');
        $this->emit('cartAdded');
    }
}

<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class Product extends Component
{
    protected $product=[];

    public function mount($product)
    {
        $this->product = $product;
    }

    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        session()->flash('message', 'Post successfully updated.');
        $this->emit('cartAdded');
    }

    public function render()
    {
        return view('livewire.product', [
            'product' => $this->product
        ]);
    }
}

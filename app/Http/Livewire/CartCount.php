<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class CartCount extends Component
{
    protected $listeners = [
        'cartAdded' => 'render',
        'cartRemoved' => 'render',
        'cartUpdated' => 'render'
    ];
    public function render()
    {
        $cart = new CartController;
        return view('livewire.cart-count', [
            'cart_count' => $cart->cart_count(),
        ]);
    }
}

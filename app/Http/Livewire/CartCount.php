<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class CartCount extends Component
{
    private $cart_handler;
    public $carts;

    protected $listeners = [
        'cartAdded' => 'render',
        'cartRemoved' => 'render',
        'cartUpdated' => 'render'
    ];
    
    public function __construct() {
        $this->cart_handler = new CartController();
    }
    public function render()
    {
        $this->carts = $this->cart_handler->get();
        return view('livewire.cart-count', [
            'cart_count' => $this->cart_handler->cart_count(),
        ]);
    }
}

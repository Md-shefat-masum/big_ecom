<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class Cart extends Component
{
    public $carts;
    public $cart_amount;
    private $cart_handler;
    
    public function __construct() {
        $this->cart_handler = new CartController();
    }
    public function render()
    {
        $this->carts = $this->cart_handler->get();
        return view('livewire.cart')
        ->extends('frontend.layout', [
            'title' => 'login',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }

    public function increase($id)
    {
        $this->cart_handler->qty_increase($id);
        $this->emit('cartAdded');
    }

    public function decrease($id)
    {
        $this->cart_handler->qty_decrease($id);
        $this->emit('cartAdded');
    }

    public function remove($id)
    {
        $this->cart_handler->remove($id);
        $this->emit('cartAdded');
    }

    public function quantityChange($qty, $id)
    {
        $this->cart_handler->qty_change($qty, $id);
        $this->emit('cartAdded');
    }

    public function CountCart()
    {
        $this->cart_handler->cart_count();
    }
}

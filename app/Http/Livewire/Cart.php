<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class Cart extends Component
{
    public $carts;
    public function render()
    {
        $cart = new CartController();
        $this->carts = $cart->get();
        return view('livewire.cart')
        ->extends('frontend.layout', [
            'title' => 'login',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }

    public function increase($id)
    {
        $cart = new CartController();
        $cart->qty_increase($id);
    }

    public function decrease($id)
    {
        $cart = new CartController();
        $cart->qty_decrease($id);
    }

    public function remove($id)
    {
        $cart = new CartController();
        $cart->remove($id);
    }
}

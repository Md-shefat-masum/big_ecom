<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use Livewire\Component;

class Checkout extends Component
{
    private $cart_handler;
    public $carts;
    public $cart_total;
    public $shipping_method=0;

    public function __construct() {
        $this->cart_handler = new CartController();
    }
    public function render()
    {
        $this->carts = $this->cart_handler->get();
        $this->cart_total = $this->shipping_method + $this->cart_handler->cart_total();
        return view('livewire.checkout')
        ->extends('frontend.layout', [
            'title' => 'Checkout',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
    public function updateShipping($value)
    {
        $this->shipping_method = $value;
        $this->cart_total = $this->shipping_method + $this->cart_total;
    }
}

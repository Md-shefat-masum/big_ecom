<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Product;
use Livewire\Component;

class ProductDetails extends Component
{
    public $product_id;
    public $product;
    protected $listeners = [
        'product_cart_update' => 'product_cart_update'
    ];

    public function product_cart_update()
    {
    }
    public function mount($id)
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.product-details', [
            'product' => $this->product,
        ])
        ->extends('frontend.layout', [
            'title' => 'Product Details',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
    
    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        $this->emitUp('product_cart_update');
    }
}

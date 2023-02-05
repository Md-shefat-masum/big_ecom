<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
class ProductDetails extends Component
{
    public $product_id;
    public $product;
    protected $listeners = [
        'product_cart_update' => 'product_cart_update'
    ];

    
    public function mount($id)
    {
        $this->product = Product::find($id);
    }

    public function render()
    {
        if(isset($this->product->description)) { 
            $meta_decription = strip_tags($this->product->description);
            $meta_decription = Str::limit($meta_decription, 300, '...');
        }
        return view('livewire.product-details', [
            'product' => $this->product,
        ])
        ->extends('frontend.layout', [
            'meta' => [
                "title" => isset($this->product->product_name) ? $this->product->product_name . " - " . $_SERVER['SERVER_NAME'] :  "",
                "image" => isset($this->product->related_images[0]['image']) ? url('') . '/' . $this->product->related_images[0]['image'] : "",
                "og_image" => isset($this->product->related_images[0]['image']) ? url('') . '/' . $this->product->related_images[0]['image'] : "",
                "twitter_image" => isset($this->product->related_images[0]['image']) ? url('') . '/' . $this->product->related_images[0]['image'] : "",
                "description" => $meta_decription ?? "",
                "price" => isset($this->product->default_price) ? $this->product->default_price : "" ,
                "keywords" => isset($this->product->search_keywords) ? $this->product->search_keywords : ""
            ],
        ]);
    }
    
    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        $this->emitUp('product_cart_update');
    }
}

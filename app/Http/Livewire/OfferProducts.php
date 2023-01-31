<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OfferProducts extends Component
{
    protected $products=[];
    
    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        session()->flash('message', 'Post successfully updated.');
        $this->emit('cartAdded');
    }

    public function render()
    {
        $this->products = Product::whereExists(function ($query) {
            $query->from('discount_products')
                ->whereColumn('discount_products.product_id', 'products.id')
                ->where("discount_last_date",">", Carbon::now());
        })
        ->paginate(20);

        return view('livewire.offer-products', [
            'products' => $this->products,
        ])->extends('frontend.layout', [
            'meta' => [
                "title" => "Offer products, Best deal" . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);;
    }
}

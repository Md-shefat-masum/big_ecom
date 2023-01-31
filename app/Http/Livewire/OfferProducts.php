<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class OfferProducts extends Component
{
    protected $products=[];
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

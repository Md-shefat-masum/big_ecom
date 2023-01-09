<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomePageProduct extends Component
{
    public $products;
    public $take;
    public $skip;
    public $total;
    public $total_page;
    public $current_page = 0;

    public function mount()
    {
        $this->products = [];
        $this->take = 12;
        $this->skip = 0;
        $this->current_page = 1;
        $this->total = Product::where('status', 1)->count();
        $this->total_page = ceil($this->total / $this->take);
        $this->get_products();
    }

    public function render()
    {
        return view('livewire.home-page-product');
    }

    public function get_products()
    {
        $this->skip = ($this->current_page-1) * $this->take;
        $this->products = array_merge($this->products, Product::latest()
            ->take($this->take)
            ->skip($this->skip)
            ->get()->toArray());
    }

    public function nextPage()
    {
        if($this->current_page <= $this->total_page) {
            $this->current_page++;
            $this->get_products();
        }
    }

    public function addToCart()
    {
        
    }
}

<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Product;
use Livewire\Component;

class HomePageProduct extends Component
{
    public $products;
    public $take;
    public $skip;
    public $total;
    public $total_page;
    public $view_product;
    public $current_page = 0;
    public $is_showModal = false;

    protected $listeners = [
        'viewProduct' => 'quickView',
        'CloseViewProduct' => 'closeQuickView',
    ];

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

    public function quickView($product)
    {
        $this->is_showModal = true;
        $this->view_product = Product::find($product);
    }

    public function closeQuickView() {
        $this->is_showModal = false;
    }

    public function get_products()
    {
        $this->skip = ($this->current_page-1) * $this->take;
        $this->products = array_merge($this->products, Product::take($this->take)
        ->with('discounts', function($q) {
            $q->orderBy('created_at','DESC')->select('id', 'product_id' ,'discount_percent', 'discount_amount');
        })
        ->skip($this->skip)
        ->select('id', 'product_name', 'default_price')
        ->get()->toArray());
    }

    public function details($id)
    {
        return redirect()->to("/product-details/$id");
    }

    public function nextPage()
    {
        if($this->current_page <= $this->total_page) {
            $this->current_page++;
            $this->get_products();
        }
    }

    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        session()->flash('message', 'Post successfully updated.');
        $this->emit('cartAdded');
    }
}

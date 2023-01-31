<?php

namespace App\Http\Livewire;

use App\Http\Controllers\CartController;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
class CategoryProduct extends Component
{
    protected $products_query=null;
    public $category_id;
    public $min_price=1;
    public $max_price=0;
    public $brands;
    public $sub_categories;
    public $category_name;
    public $is_showModal = false;
    public $view_product;

    
    public function mount($id, $category_name)
    {
        $this->category_id = $id;
        $this->category_name = $category_name;
        session()->put('category_url',  explode('?',url()->full())[0]);
        $this->brands = Brand::where('status', 1)->limit(60)->get();
        $this->sub_categories = Category::where('parent_id', $id)->select('id','name')->get();
    }

    public function quickView($product)
    {
        // $this->is_showModal = true;
        // $this->view_product = Product::find($product);
    }

    public function addToCart($id, $qty=1)
    {
        $cart = new CartController();
        $cart->add_to_cart($id, $qty);
        session()->flash('message', 'Post successfully updated.');
        $this->emit('cartAdded');
    }

    public function closeQuickView() {
        $this->is_showModal = false;
    }

    public function PriceFilter($formData) {
        // dd($formData);
        $this->min_price  = $formData['min_price'];
        $this->max_price  = $formData['max_price'];
        
    }

    public function render()
    {
        $id = $this->category_id;
        $this->products_query = Product::whereExists(function ($query) use($id) {
            $query->from('category_product')
                  ->whereColumn('category_product.product_id', 'products.id')
                  ->where('category_product.category_id', $id);
        });

        if( (int) $this->min_price && (int) $this->max_price) {
            $this->products_query->whereBetween('default_price', [ (int)$this->min_price, (int) $this->max_price]);
        }

        $temp = $this->products_query->paginate(18);
        $pagination_links = $temp->links()->render();

        $url = session()->get('category_url');
        $pagination_links = str_replace("livewire/message/", "", $pagination_links);
        $pagination_links = str_replace(url('')."/category-product?", $url."?", $pagination_links);

        return view('livewire.category-product', [
            'all_products' => $temp,
            'links' => $pagination_links
        ])
        ->extends('frontend.layout', [
            'meta' => [
                "title" => $this->category_name . " - " . $_SERVER['SERVER_NAME'],
            ],
        ]);
    }
}

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
    protected $brand_products_query=null;
    public $category_id;
    public $min_price=1;
    public $max_price=0;
    public $brands;
    public $sub_categories;
    public $category_name;
    public $brand_query = false;
    public $brand_ids = [];
    public $view_product;

    
    public function mount($id, $category_name)
    {
        $this->category_id = $id;
        $this->category_name = $category_name;
        session()->put('category_url',  explode('?',url()->full())[0]);
        
        $this->sub_categories = Category::where('parent_id', $id)->select('id','name')->get();
    }

    public function filterBrand()
    {
        if(count($this->brand_ids) > 0) {
            $this->brand_query = true;
        }else {
            $this->brand_query = false;
        }
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

    

    public function PriceFilter($formData) {
        // dd($formData);
        $this->min_price  = $formData['min_price'];
        $this->max_price  = $formData['max_price'];
        
    }

    public function render()
    {
        $id = $this->category_id;
        
        if($this->brand_query == true) {
            $this->brand_products_query = Product::whereExists(function ($query) use($id) {
                $query->from('category_product')
                      ->whereColumn('category_product.product_id', 'products.id')
                      ->where('category_product.category_id', $id);
            })->whereIn('brand_id', $this->brand_ids);
        }else {
            $this->products_query = Product::whereExists(function ($query) use($id) {
                $query->from('category_product')
                      ->whereColumn('category_product.product_id', 'products.id')
                      ->where('category_product.category_id', $id);
            });
            $brand_ids = $this->products_query->pluck('brand_id');
            $this->brands = Brand::whereIn('id', $brand_ids)->get();
        }
        

        if( (int) $this->min_price && (int) $this->max_price) {
            $this->products_query->whereBetween('default_price', [ (int)$this->min_price, (int) $this->max_price]);
        }
        if($this->brand_query == true) {
            $temp = $this->brand_products_query->paginate(18);
            $pagination_links = $temp->links()->render();
        }else {
            $temp = $this->products_query->paginate(18);
            $pagination_links = $temp->links()->render();
        }
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

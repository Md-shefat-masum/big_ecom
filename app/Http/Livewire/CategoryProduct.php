<?php

namespace App\Http\Livewire;

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

    public function mount($id)
    {
        $this->category_id = $id;
        session()->put('category_url',  explode('?',url()->full())[0]);
        $this->brands = Brand::where('status', 1)->limit(60)->get();
        $this->sub_categories = Category::where('parent_id', $id)->select('id','name')->get();
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

        // dump($_SERVER, url(''));
        return view('livewire.category-product', [
            'all_products' => $temp,
            'links' => $pagination_links
        ])
        ->extends('frontend.layout', [
            'title' => 'Category Products',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
}

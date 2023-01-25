<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CategoryProduct extends Component
{
    
    protected $products=null;
    public $category_id;

    public function mount($id)
    {
        $this->category_id = $id;
    
        // $this->products = Category::where('id', $id)->with('products_custom')->first();
        $this->products = Product::whereExists(function ($query) use($id) {
            $query->from('category_product')
                  ->whereColumn('category_product.product_id', 'products.id')
                  ->where('category_product.category_id', $id);
        });
    }

    public function render()
    {
        return view('livewire.category-product', [
            'all_products' => $this->products->paginate(18),
        ])
        ->extends('frontend.layout', [
            'title' => 'Category wise Products',
            'meta_image' => 'https://www.prossodprokashon.com/uploads/file_manager/fm_image_350x500_106195df55457491637211989.jpg',
        ]);
    }
}

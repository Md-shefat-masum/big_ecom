<?php

namespace App\Http\Livewire\Components;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Header extends Component
{
    public $categories;
    public $searchQuery;
    protected $search_products=[];

    public function search_product()
    {
        $query = Product::where('status', 1);
        $key = $this->searchQuery;
        if(strlen($key) > 0) {
            $query->where(function ($q) use ($key) {
                $q->Where('product_name', 'LIKE', '%' . $key . '%')
                ->orWhere('default_price', 'LIKE', '%' . $key . '%');
            })->select('id', 'default_price', 'product_name');
            $this->search_products = $query->paginate(10);
        }else {
            $this->search_products = null;
        }
    }

    public function render()
    {
        $this->categories = Category::where('parent_id', 0)->select('id', 'name')->get();
        return view('livewire.components.header', [
            'search_products' => $this->search_products,
        ]);
    }
    public function category_product($data)
    {
        $id = $data['id'];
        $name = str_replace(' ', '-', strtolower($data['name']));
        return redirect()->to("/category/$id/$name");
    }
}

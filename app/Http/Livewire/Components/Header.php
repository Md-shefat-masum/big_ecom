<?php

namespace App\Http\Livewire\Components;

use App\Models\Category;
use Livewire\Component;

class Header extends Component
{
    public $categories;
    public function render()
    {
        $this->categories = Category::where('parent_id', 0)->select('id', 'name')->get();
        return view('livewire.components.header');
    }
    public function category_product($data)
    {
        $id = $data['id'];
        $name = str_replace(' ', '-', strtolower($data['name']));
        return redirect()->to("/category/$id/$name");
    }
}

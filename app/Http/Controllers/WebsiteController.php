<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function category_products($slug,$id)
    {
        $category = null;
        if(Category::where('id',$id)->exists()){
            $category = Category::where('id',$id)->first();
        }
        return view('frontend.category_product',compact('category'));
        // dd([
        //     'slug' => $slug,
        //     'id' => $id,
        // ]);
    }


}

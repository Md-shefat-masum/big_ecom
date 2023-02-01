<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function category_products($slug, $id)
    {
        $category = null;
        if (Category::where('id', $id)->exists()) {
            $category = Category::where('id', $id)->first();
        }
        return view('frontend.category_product', compact('category'));
        // dd([
        //     'slug' => $slug,
        //     'id' => $id,
        // ]);
    }

    public function add_to_cart(Request $request)
    {
        $cart = new CartController();
        $cart->add_to_cart($request->id, $request->qty);
        return response()->json([
            'cart' => $cart->get(),
            "message" => "Product added to cart successfully",
            'cart_count' => $cart->cart_count(),
        ], 200);
    }

    public function clear_cart()
    {
        session()->forget('carts');
    }

    public function single_product_details($id)
    {
        $product = Product::find($id);
        return view('livewire.quick-view-product', compact('product'))->render();
        // return response()->json([
        //     "product" => $product
        // ]);
    }

    public function cart_all()
    {
        ddd(session()->get('carts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public $cart = [];

    public function __construct() {
        if(auth()->check()) {
            $this->cart = Cart::Where('user_id', auth()->user()->id)->get();
        }else {
        }
        if(Session::has("carts")) {
            $this->cart = Session::get("carts");
        }
        // dd(session()->all());
    }

    public function add_to_cart($id, $qty)
    {
    
        $product = Product::where('id', $id)
        ->where('status', 1)
        ->select("id", "product_name", "default_price")
        ->first();

        $temp_arr = [
            "product" => $product,
            "qty" => $qty
        ];

        array_push($this->cart, collect($temp_arr));
        $this->cart_save();

    }
    public function cart_save() {
        Session::put('carts', $this->cart);
    }
    public function get($id=null) {
        if($id) {

        }else {
            return $this->cart;
        }
    }

}

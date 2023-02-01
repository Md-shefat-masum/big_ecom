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
        // if(auth()->check()) {
        //     $this->cart = Cart::Where('user_id', auth()->user()->id)->get();
        // }else {
        // }
        if(Session::has("carts")) {
            $this->cart = Session::get("carts");
        }
        // dd(session()->all());
    }

    public function add_to_cart($id, $qty)
    {   
        if(count($this->cart) > 0) {
            foreach ($this->cart as $key => $value) {
                if($value['product']->id == $id)
                {
                    $value['qty']+= 1;
                }
            }
        }
        $product = Product::where('id', $id)
        ->where('status', 1)
        ->select("id", "product_name", "default_price")
        ->with(['discounts', 'related_image' => function($q) {
            $q->select('id', 'product_id' ,'image');
        }])
        ->first();

        // dd($product);

        if($product->discounts) {
            $price = (float)$product->default_price-(float)$product->discounts['discount_amount'];
        }else {
            $price = (float)$product->default_price;
        }
        
        if(!is_numeric($price)) {
            $price = 0;
        }

        $temp_arr = [
            "product" => $product,
            "qty" => $qty,
            "price" => $price 
        ];

        array_push($this->cart, collect($temp_arr));
        $this->cart_save();
        
    
    }
    public function cart_save() {
        Session::put('carts', $this->cart);
    }
    
    public function cart_count()
    {
        $count = count($this->cart);
        return $count;
    }

    public function cart_total()
    {
        $total = 0;
        foreach ($this->cart as $value) {
            // if($value['product']->id == $id)
            
            if(is_numeric($value['price'])) {
                $total += $value['price'] * $value['qty'];
            }else {
                0 * $value['qty'];
            }
        }
        return $total;
    }

    public function qty_increase($id) {
        foreach ($this->cart as $key => $value) {
            if($value['product']->id == $id)
            {
                $value['qty']+= 1;
            }
        }
        return $this->cart;
    }
    public function qty_decrease($id) {
        foreach ($this->cart as $key => $value) {
            if($value['product']->id == $id)
            {
                if($value['qty']>0) {
                    $value['qty']-= 1;
                }
            }
        }
        return $this->cart;
    }
    public function remove($id) {
        foreach ($this->cart as $key => $value) {
            if($value['product']->id == $id)
            {
                array_splice($this->cart, $key, 1);
                Session::put('carts', $this->cart);
            }
        }
        
        return $this->cart;
    }

    public function emptyCart()
    {
        session()->forget('carts');
    }

    public function qty_change($qty, $id) {
        foreach ($this->cart as $key => $value) {
            if($value['product']->id == $id)
            {
                $qty = (int)$qty;
                if($value['qty']>0) {
                    $value['qty'] = $qty;
                }
            }
        }
        return $this->cart;
    }

    public function get($id=null) {
        if($id) {

        }else {
            return $this->cart;
        }
    }

}

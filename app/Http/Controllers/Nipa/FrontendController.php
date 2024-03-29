<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\CheckoutInformation;
use App\Models\Frontend;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderInformation;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ShippingAddress;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{

    public function home_all_product()
    {
        // $category=Category::orderBy('id','DESC')->paginate(8);
        // return view('frontend.index',['category' => $category]);

    }
    public function json_home_category_product()
    {
        $data = Product::orderBy('id', 'DESC')->paginate(8);
        return $data;
    }
    // public function frontend_category()
    // {
    //     $paidFeesIds = Product::select('selected_categories')->get()->toArray();;
    //     $v=json_decode($paidFeesIds);
    //     $data = DB::table('categories')->where('id',24)->first();;
    //     return $data;
    //     dd( $paidFeesIds[0]);
    // }
    public function frontend_category()
    {
        $data = Category::orderBy('id', 'DESC')->get();
        return $data;
    }
    public function menu_category()
    {
        $data = Category::orderBy('id', 'ASC')->get();
        return $data;
    }
    public function frontend_product()
    {
        // $data = Product::orderBy('id', 'DESC')->where('status',1)->paginate(10);
        $data = [];
        return view('frontend.product', compact('data'));
    }
    public function frontend_get_product()
    {
        $data = Product::orderBy('id', 'DESC')->with('related_image')->where('status', 1)->paginate(16);
        return $data;
    }
    // public function get_product_image()
    // {
    //     $image = ProductImage::paginate(10);
    //     return $image;
    // }
    public function product_details(Request $request, $id)
    {
        // $data = Product::orderBy('id', 'DESC')->where('status',1)->paginate(10);
        $data = Product::find($id);
        return view('frontend.product-details', compact('data'));
    }
    public function json_product_details(Request $request, $id)
    {
        $data = Product::find($id);
        return $data;
    }


    public function frontend_cart()
    {
        return view('frontend.cart');
    }
    public function add_to_cart(Request $request)
    {
        $add = new Cart();
        $add->product_id = $request->product_id;

        $add->save();
    }
    public function frontend_wishlist()
    {
        return view('frontend.wishlist');
    }
    public function frontend_account()
    {
        return view('frontend.account');
    }

    public function frontend_get_account()
    {

        return Auth::user();
    }
    public function frontend_edit_account(Request $request)
    {
        $user = User::find($request->id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->username = $request->username;
        $user->role_id = $request->role_id;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->created_at = Carbon::now()->toDateTimeString();
        $user->creator = Auth::user()->id;
        $user->save();

        $user->slug = $user->id . uniqid(10);
        $user->save();

        if ($request->hasFile('image')) {
            $user->photo = Storage::put('uploads/user', $request->file('image'));
            $user->save();
        }
    }

    public function frontend_contact()
    {
        return view('frontend.contact');
    }
    public function frontend_invoice()
    {
        return view('frontend.invoice');
    }
    public function frontend_checkout()
    {
        return view('frontend.checkout');
    }

    public function add_checkout(Request $request)
    {
        // dd($request->all());


        if (OrderAddress::where('user_id', Auth::user()->id)->exists()) {
            $address = OrderAddress::where('user_id', Auth::user()->id)->first();
        } else {
            $address = new OrderAddress();
        }

        $req_billing_address = (object) $request->billing_address;
        $address->user_id = Auth::user()->id;
        $address->first_name = $req_billing_address->first_name;
        $address->last_name = $req_billing_address->last_name;
        $address->street_address = $req_billing_address->street_address;
        $address->city = $req_billing_address->city;
        $address->phone = $req_billing_address->phone;
        $address->email = $req_billing_address->email;
        $address->country = $req_billing_address->country;
        $address->company_name = $req_billing_address->company_name;
        $address->zip_code = $req_billing_address->zip_code;
        $address->comment = $request->comment;
        // $address->invoice_id = 10000 + $order->id;
        $address->created_at = Carbon::now()->toDateTimeString();
        $address->save();

        if (BillingAddress::where('user_id', Auth::user()->id)->exists()) {
            $billing_address = BillingAddress::where('user_id', Auth::user()->id)->first();
        } else {
            $billing_address = new BillingAddress();
        }

        $billing_address->user_id = Auth::user()->id;
        $billing_address->street_address = $req_billing_address->street_address;
        $billing_address->city = $req_billing_address->city;
        $billing_address->phone = $req_billing_address->phone;
        $billing_address->email = $req_billing_address->email;
        $billing_address->country = $req_billing_address->country;
        $billing_address->company_name = $req_billing_address->company_name;
        $billing_address->zip_code = $req_billing_address->zip_code;
        // $billing_address->invoice_id = 10000 + $order->id;
        $billing_address->created_at = Carbon::now()->toDateTimeString();
        $billing_address->save();

        if (ShippingAddress::where('user_id', Auth::user()->id)->exists()) {
            $shipping_address = ShippingAddress::where('user_id', Auth::user()->id)->first();
        } else {
            $shipping_address = new ShippingAddress();
        }

        $shipping_address->user_id = Auth::user()->id;
        $shipping_address->street_address = $req_billing_address->street_address;
        $shipping_address->city = $req_billing_address->city;
        $shipping_address->phone = $req_billing_address->phone;
        $shipping_address->email = $req_billing_address->email;
        $billing_address->country = $req_billing_address->country;
        $billing_address->company_name = $req_billing_address->company_name;
        $billing_address->zip_code = $req_billing_address->zip_code;
        // $shipping_address->invoice_id = 10000 + $order->id;
        $shipping_address->created_at = Carbon::now()->toDateTimeString();
        $shipping_address->save();

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->invoice_date = Carbon::now()->toDateTimeString();
        // $order->total_discount = ;
        $order->sub_total = $request->sub_total;
        $order->total_price = $request->sub_total;
        $order->created_at = Carbon::now()->toDateTimeString();
        $order->save();
        $order->invoice_id = 10000 + $order->id;
        $order->save();


        foreach ($request->c_cart as $cart) {
            // dd($request->cart);
            $cart = (object) $cart;
            $cart_info = (object) $cart->cart_option;
            $product_info = (object) $cart->product;
            $order_product = new OrderInformation();
            $order_product->customer_id = Auth::user()->id;
            $order_product->order_id = $order->id;
            $order_product->product_id = $product_info->id;
            // $order_product->product_code = $product_info->product_code;
            $order_product->product_name = $product_info->product_name;
            $order_product->qty = $cart_info->qty;
            // $order_product->color = $cart->color;
            // $order_product->size = $cart->size;
            $order_product->price = $product_info->default_price;
            $order_product->invoice_id = 10000 + $order->id;
            $order_product->creator = Auth::user()->id;
            $order_product->created_at = Carbon::now()->toDateTimeString();
            $order_product->save();
        }

        return response()->json([
            'invoice_id' => $order->invoice_id,
            'invoice_date' => Carbon::parse($order->invoice_date)->format('d,M Y'),
        ]);
    }



    public function get_checkout_information()
    {
        $order = Order::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->with('order_information')->first();
        return $order;
    }

    public function get_product_filter(Request $request)
    {
        // $max_price = Product::orderBy('default_price', 'DESC')->first();
        // $min_price = Product::orderBy('default_price', 'ASC')->first();
        $min = $request->min;
        $max = $request->max;
        $data = Product::orderBy('id', 'DESC')->whereBetween('default_price', [$min, $max])->paginate(16);
        return $data;
    }
    public function json_min_max_price()
    {
        $max_price = Product::orderBy('default_price', 'DESC')->first();
        $min_price = Product::orderBy('default_price', 'ASC')->first();
        return response()->json([
            'max_price' => $max_price->default_price,
            'min_price' => $min_price->default_price,
        ]);
    }
}

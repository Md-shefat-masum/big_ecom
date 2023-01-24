<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderDeliveryInfo;
use App\Models\OrderDetails;
use App\Models\OrderPayment;
use App\Models\ProductReview;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class FrontendController extends Controller
{
    public function confirm_order(Request $request)
    {
        $carts = new CartController();

        
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string'],
            'last_name' => ['required'],
            'address' => ['required'],
            'mobile_number' => ['required', 'string'],
            'email' => ['email'],
            'city' => ['required', 'string'],
            'zone' => ['required', 'string'],
            'payment_method' => ['required'],
            'bkash_number' => ['required_if:payment_method,==,bkash'],
            'bkash_trx_id' => ['required_if:payment_method,==,bkash'],
            'bank_account_no' => ['required_if:payment_method,==,bank'],
            'bank_transaction_id' => ['required_if:payment_method,==,bank'],
            'shipping_method' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'data' => $validator->errors(),
            ], 422);
        }

        $order = new Order();
        $order->order_status = 'Pending';
        $order->total_price = $request->order_total;
        $order->sub_total = $request->cart_total;
        $order->total_discount = $request->total_discount;
        $order->order_coupon = $request->coupon;
        $order->coupon_discount = $request->coupon_discount;
        $order->payment_status = 'Pending';
        $order->delivery_method = $request->shipping_method;
        $order->save();
        
        $date= Carbon::now()->format('Y-m');
        if(strlen($order->id) == 1){
            $order->invoice_id = $date . "-000" . $order->id;
        }elseif(strlen($order->id) == 2){
            $order->invoice_id = $date . "-00" . $order->id;
        }elseif(strlen($order->id) == 3){
            $order->invoice_id = $date . "-0" . $order->id;
        }else{
            $order->invoice_id = $date . "-" . $order->id;
        }

        $order->invoice_date = Carbon::now()->format('Y-m-d');
        $order->save();

        $order_info = new OrderAddress();
        $order_info->order_id = $order->id;
        $order_info->first_name = $request->first_name;
        $order_info->last_name = $request->last_name;
        $order_info->address = $request->address;
        $order_info->mobile_number = $request->mobile_number;
        $order_info->email = $request->email;
        $order_info->zone = $request->zone;
        $order_info->comment = $request->comment;
        $order_info->save();

        $order_payment = new OrderPayment();
        $order_payment->order_id = $order->id;
        $order_payment->payment_method = $request->payment_method;
        $order_payment->bkash_number = $request->bkash_number;
        $order_payment->bkash_trx_id = $request->bkash_trx_id;
        $order_payment->bank_account_no = $request->bank_account_no;
        $order_payment->bank_trx_id = $request->bank_trx_id;
        $order_payment->amount = $order->total_price;
        $order_payment->trx_id = uniqid();
        $order_payment->status = "Pending";
        $order_payment->save();

        $order_delivery = new OrderDeliveryInfo();
        $order_delivery->order_id = $order->id;
        $order_delivery->delivery_method = $request->shipping_method;
        if($request->shipping_method == 'cod') {
            $order_delivery->delivery_cost = 0;
        }
        if($request->shipping_method == 'home_delivery') {
            $order_delivery->delivery_cost = 60;
        }
        if($request->shipping_method == 'outside_dhaka') {
            $order_delivery->delivery_cost = 120;
        }
        $order_delivery->save();        
        
        $cart_products = $carts->get();
        foreach ($cart_products as $key => $product) {
            $order_details = new OrderDetails();
            $order_details->order_id = $order->id;
            $order_details->product_id = $product['product']->id;
            if(is_numeric($product['product']->default_price)) {
                $order_details->product_price = $product['product']->default_price;
            }else {
                $order_details->product_price = 0;
            }
            $order_details->qty = $product['qty'];
            $order_details->save();
        }
        $carts->emptyCart();

        return response()->json([
            "message" => "Order Completed Successfully"
        ], 200);

    }

    public function reviewSubmit(Request $request)
    {
        if(Auth::check()) {
            $validator = Validator::make($request->all(), [
                'rating' => ['required', 'numeric'],
                'review_description' => ['required', 'string']
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'err_message' => 'validation error',
                    'data' => $validator->errors(),
                ], 422);
            }
    
            $product_review = new ProductReview();
            $product_review->user_id = $request->user_id;
            $product_review->product_id = $request->product_id;
            $product_review->star = $request->rating;
            $product_review->review_description = $request->review_description;
            $product_review->creator = $request->user_id;
            $product_review->approve = 0;
            $product_review->status = 1;
            $product_review->save();
    
            return response()->json([
                "message" => "Product review created Successfully"
            ], 200);
        }else {
            return response()->json([
                'message' => 'you are not authanticated'
            ], 401);
        }
        
    }

    public function website_login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        Auth::login($user);

        return response()->json([
            'message' => 'you are logged in'
        ], 200);
    }
    
    public function website_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'mobile_number' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'data' => $validator->errors(),
            ], 422);
        } else {
            $data = $request->except(['password', 'password_confirmation', 'image']);
            $data['role_id'] = 4;
            $data['password'] = Hash::make($request->password);
            $data['first_name'] = $request->name;
            $data['phone'] = $request->mobile_number;
            $user = User::create($data);
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $path = 'uploads/users/pp-' . $user->user_name . '-' . $user->id . rand(1000, 9999) . '.' . $file->getClientOriginalExtension();
                Image::make($file)->fit(200, 200)->save(public_path($path));
                $user->photo = $path;
            }
            $user->slug = $user->name . $user->id . rand(1000, 9999);
            $user->save();

            Auth::login($user);
            $user = User::where('id', Auth::user()->id)->with('roles')->first();
            return response()->json($user, 200);
        }
    }

    public function login() {
        return view('auth.login');
    }

    public function loginSubmit()
    {
        $user = User::where('email', request()->email)->first();

        Auth::login($user);

        return redirect()->route('admin_index');
    }

}


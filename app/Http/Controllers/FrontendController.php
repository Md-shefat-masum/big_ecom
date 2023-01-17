<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderDetails;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

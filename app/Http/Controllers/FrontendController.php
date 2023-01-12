<?php

namespace App\Http\Controllers;

use App\Models\OrderAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{
    public function confirm_order(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string'],
            'last_name' => ['required'],
            'address' => ['required'],
            'mobile_number' => ['required', 'string'],
            'email' => ['email'],
            'city' => ['required', 'string'],
            'zone' => ['required', 'string'],
            'payment_method' => ['required'],
            'delivery_method' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'data' => $validator->errors(),
            ], 422);
        }

        return response()->json($request->all());

        // $order_info = new OrderAddress();
        // $order_info->first_name = $request->first_name;
        // $order_info->last_name = $request->last_name;
        // $order_info->address = $request->address;
        // $order_info->mobile_number = $request->mobile_number;
        // $order_info->email = $request->email;
        // $order_info->zone = $request->zone;
        // $order_info->comment = $request->comment;
        // $order_info->save();
    }
}

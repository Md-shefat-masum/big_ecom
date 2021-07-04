<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Frontend;
use App\Models\Product;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{

    public function frontend_product()
    {
        $data = Product::orderBy('id', 'DESC')->get();
        return view('frontend.product', compact('data'));
    }
    public function frontend_get_product()
    {
        return Product::get();
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

        $user->slug = $user->id.uniqid(10);
        $user->save();

        if($request->hasFile('image')){
            $user->photo = Storage::put('uploads/user',$request->file('image'));
            $user->save();
        }
    }

    public function frontend_contact()
    {
        return view('frontend.contact');
    }
}

<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\ProductDiscountType;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductDiscountTypeController extends Controller
{

    public function index()
    {
        $data = ProductDiscountType::orderBy('id', 'DESC')->get();
        return view('admin.nipa.product-discount.index', compact('data'));
    }

    public function add()
    {
        return view('admin.nipa.product-discount.add');
    }
    public function insert(Request $request)
    {
      
        $add = new ProductDiscountType;
        $add->discount_type_name = $request->discount_type_name;
        $add->save();
        return $add;
    }

    public function edit(Request $request, $id)
    {
        // return ProductDiscountType::where('id',$id)->first();
        $data = ProductDiscountType::find($id);
        return view('admin.nipa.product-discount.edit', compact('data'));
    }
    public function update(Request $request)
    {
        $add = ProductDiscountType::find($request->id);
        $add->discount_type_name = $request->discount_type_name;
        $add->save();
        return $add;
    }

    public function view(Request $request, $id)
    {
        $data = ProductDiscountType::find($id);
        return view('admin.nipa.product-discount.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ProductDiscountType::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
            return redirect()->route('about')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}

<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\ProductTaxClass;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductNewController extends Controller
{

    public function index()
    {
        $data = ProductTaxClass::orderBy('id', 'DESC')->get();
        return view('admin.nipa.product-taxclass.index', compact('data'));
    }

    public function add()
    {
        return view('admin.nipa.product-taxclass.add');
    }
    public function insert(Request $request)
    {
      
        $add = new ProductTaxClass;
        $add->tax_class_name = $request->tax_class_name;
        $add->save();
        return $add;
    }

    public function edit(Request $request, $id)
    {
        // return ProductTaxClass::where('id',$id)->first();
        $data = ProductTaxClass::find($id);
        return view('admin.nipa.product-taxclass.edit', compact('data'));
    }
    public function update(Request $request)
    {
        $add = ProductTaxClass::find($request->id);
        $add->tax_class_name = $request->tax_class_name;
        $add->save();
        return $add;
    }

    public function view(Request $request, $id)
    {
        $data = ProductTaxClass::find($id);
        return view('admin.nipa.product-taxclass.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ProductTaxClass::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
            return redirect()->route('about')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}

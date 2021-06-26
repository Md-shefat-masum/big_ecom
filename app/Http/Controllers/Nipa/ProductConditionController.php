<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\ProductCondition;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductConditionController extends Controller
{

    public function index()
    {
        $data = ProductCondition::orderBy('id', 'DESC')->get();
        return view('admin.nipa.product-condition.index', compact('data'));
    }

    public function add()
    {
        return view('admin.nipa.product-condition.add');
    }
    public function insert(Request $request)
    {
      
        $add = new ProductCondition;
        $add->product_condition_name = $request->product_condition_name;
        $add->save();
        return $add;
    }

    public function edit(Request $request, $id)
    {
        // return ProductCondition::where('id',$id)->first();
        $data = ProductCondition::find($id);
        return view('admin.nipa.product-condition.edit', compact('data'));
    }
    public function get_edit(Request $request, $id)
    {
    
        return ProductCondition::find($id);
    }
    public function update(Request $request)
    {
        $add = ProductCondition::find($request->id);
        $add->product_condition_name = $request->product_condition_name;
        $add->save();
        return $add;
    }

    public function view(Request $request, $id)
    {
        $data = ProductCondition::find($id);
        return view('admin.nipa.product-condition.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ProductCondition::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
            return redirect()->route('about')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}

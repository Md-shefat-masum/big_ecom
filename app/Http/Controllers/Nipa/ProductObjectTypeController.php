<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\ProductObjectType;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProductObjectTypeController extends Controller
{

    public function index()
    {
        $data = ProductObjectType::orderBy('id', 'DESC')->get();
        return view('admin.nipa.product-object.index', compact('data'));
    }

    public function add()
    {
        return view('admin.nipa.product-object.add');
    }
    public function insert(Request $request)
    {
      
        $add = new ProductObjectType;
        $add->object_type_name = $request->object_type_name;
        $add->save();
        return $add;
    }

    public function edit(Request $request, $id)
    {
        // return ProductObjectType::where('id',$id)->first();
        $data = ProductObjectType::find($id);
        return view('admin.nipa.product-object.edit', compact('data'));
    }
    public function update(Request $request)
    {
        $add = ProductObjectType::find($request->id);
        $add->object_type_name = $request->object_type_name;
        $add->save();
        return $add;
    }

    public function view(Request $request, $id)
    {
        $data = ProductObjectType::find($id);
        return view('admin.nipa.product-object.view', compact('data'));
    }

    public function delete(Request $request, $id)
    {
        $data = ProductObjectType::findOrFail($id);

        $data->delete();
        // $data->save();
        if ($data) {
            return redirect()->route('about')->with('success-del', 'value');
        } else {
            return back()->with('error', 'value');
        }
    }
}

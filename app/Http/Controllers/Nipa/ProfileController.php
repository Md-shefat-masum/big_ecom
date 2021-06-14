<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function edit(Request $request, $id)
    {
        $data = User::find($id);
        return view('admin.nipa.profile.edit',compact('data'));
    }
  

    public function update_profile(Request $request, User $product)
    {  

    $user = User::find($request->id);


    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->role_id = $request->role_id;
    $user->updated_at = Carbon::now()->toDateTimeString();
    $user->creator = Auth::user()->id;
    if ($request->get('password') == '') {
        $user->update($request->except('password'));
    } else {
        $user->password = Hash::make($request->get('password'));
    }
    $user->save();

    return back()->with('success','data updated');;
    // return $user;
    }
    public function change_email()
    {
        return view('admin.nipa.profile.change-email');
    }
    public function change_password()
    {
        return view('admin.nipa.profile.change-password');
    }
    public function additional_authentication()
    {
        return view('admin.nipa.profile.additional-authentication');
    }


    
}

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
        return view('admin.nipa.profile.edit', compact('data'));
    }


    public function update_profile(Request $request)
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

        return back()->with('success', 'data updated');;
        // return $user;
    }
    public function change_email(Request $request, $id)
    {
        $data = User::find($id);
        return view('admin.nipa.profile.change-email', compact('data'));
    }
    public function update_email(Request $request)
    {
        $user = User::find($request->id);


        $user->email = $request->email;
        if (Hash::check($request->password, $user->password)) {
            $user->update($request->except('password'));
        } else {
            return back()->with('error', 'password is not matched');;
        }

        $user->save();

        return back()->with('success', 'data updated');;
    }
    public function change_password(Request $request, $id)
    {
        $data = User::find($id);
        return view('admin.nipa.profile.change-password', compact('data'));
    }
    public function update_password(Request $request)
    {
        $user = User::find($request->id);
        if (Hash::check($request->password, $user->password)) {
            $user->password = Hash::make($request->get('password2'));
        } else {
            return back()->with('error', 'Currrent password is not matched');;
        }

        $user->save();

        return back()->with('success', 'data updated');;
    }
    public function additional_authentication()
    {
        return view('admin.nipa.profile.additional-authentication');
    }
}

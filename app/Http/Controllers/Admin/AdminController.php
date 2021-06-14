<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function set_theme(Request $request)
    {
        return User::where("id",Auth::user()->id)->update(['admin_theme'=>$request->theme]);
    }

    // blank page functions
    public function blade_index()
    {
        return view('admin.blank.index');
    }
    public function blade_create()
    {
        return view('admin.blank.create');
    }
    public function blade_view()
    {
        return view('admin.blank.view');
    }
}

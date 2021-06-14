<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('admin.nipa.profile.edit');
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

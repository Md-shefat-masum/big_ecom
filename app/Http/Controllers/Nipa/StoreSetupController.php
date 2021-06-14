<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\StoreSetup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreSetupController extends Controller
{
    public function profile()
    {
        return view('admin.nipa.store-setup.profile');
    }
    public function currencies()
    {
        return view('admin.nipa.store-setup.currencies');
    }
    public function add_currencies()
    {
        return view('admin.nipa.store-setup.add-currencies');
    }
    public function settings()
    {
        return view('admin.nipa.store-setup.settings');
    }
    public function change_password()
    {
        return view('admin.nipa.store-setup.change-password');
    }
    public function additional_authentication()
    {
        return view('admin.nipa.store-setup.additional-authentication');
    }


    
}

<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\AccountSettings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountSettingsController extends Controller
{
    public function invoices()
    {
        return view('admin.nipa.account-settings.invoices');
    }
    public function payment_method()
    {
        return view('admin.nipa.account-settings.payment-method');
    }

    
}

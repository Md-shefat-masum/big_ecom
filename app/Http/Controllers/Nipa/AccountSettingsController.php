<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\AccountSettings;
use App\Models\Order;
use App\Models\OrderInformation;
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
    public function order_status_edit(Request $request)
    {
        $data=Order::findOrfail($request->id);
        return view('admin.nipa.account-settings.order-status-edit',compact('data'));
    }
    public function invoice_list()
    {
        $data=Order::orderBy('id','DESC')->get();
        return view('admin.nipa.account-settings.invoice-list',compact('data'));
    }
    public function invoice_view(Request $request)
    {
        $data=Order::findOrfail($request->id);
        return view('admin.nipa.account-settings.invoice-view',compact('data'));
    }
    public function admin_orders()
    {
        $data=Order::orderBy('id','DESC')->get();
        return view('admin.nipa.account-settings.admin-orders',compact('data'));
    }
    public function admin_orders_information()
    {
        $data=OrderInformation::orderBy('id','DESC')->get();
        return view('admin.nipa.account-settings.admin-orders-information',compact('data'));
    }

    
}

<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\AccountSettings;
use App\Models\Order;
use App\Models\OrderInformation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function order_status_update(Request $request)
    {
        //    dd($request->all());
        $add = Order::find($request->id);
        // $add->order_status = $request->order_status;
        if ($request->order_status == 'pending') {

            // $add->order_status = 'accept';
            DB::table('orders')->where('id', $request->id)->update(['order_status' => 'process']);
            return back();
        }
        // if($request->order_status =='pending')
        // {

        //     // $add->order_status = 'accept';
        //     DB::table('orders')->where('id',$request->id )->update(['order_status' => 'accept']);
        //     return back();
        // }

    }
    public function order_list_pending()
    {
        return view('admin.nipa.account-settings.order-list-pending');
    }
    public function json_order_list_pending()
    {

        $data = Order::orderBy('id', 'ASC')->with('order_address')->where('order_status', 'pending')->get();

        
        return $data;
        // return view('admin.nipa.account-settings.order-list-pending',compact('data'));
    }
    public function order_list_process()
    {
        $data = Order::orderBy('id', 'ASC')->where('order_status', 'process')->get();
        return view('admin.nipa.account-settings.order-list-process', compact('data'));
    }
    public function order_list_complete()
    {
        $data = Order::orderBy('id', 'ASC')->where('order_status', 'complete')->get();
        return view('admin.nipa.account-settings.order-list-complete', compact('data'));
    }

    public function delivery_man_assign(Request $request, $id)
    {
        $order = Order::find($request->id);
        $collection = User::active()->with('role_information')->where('role_id', 6)->get();
        return view('admin.user.delivery-man-assign', ['collection' => $collection, 'order' => $order]);
    }
    public function assign_order(Request $request)
    {
        //    dd($request->all());
        $add = Order::find($request->id);
        $user_email = User::find($request->email);
        // dd($user_email);
        // $add->order_status = $request->order_status;
        if ($request->order_status == 'process') {

            // $add->order_status = 'accept';
            DB::table('orders')->where($add)->update(['delivery_man_id' => $user_email]);
            return back();
        }
    }
    public function invoice_view(Request $request)
    {
        $data = Order::findOrfail($request->id);
        return view('admin.nipa.account-settings.invoice-view', compact('data'));
    }
    public function admin_orders()
    {
        $data = Order::orderBy('id', 'DESC')->get();
        return view('admin.nipa.account-settings.admin-orders', compact('data'));
    }
    public function admin_orders_information()
    {
        $data = OrderInformation::orderBy('id', 'DESC')->get();
        return view('admin.nipa.account-settings.admin-orders-information', compact('data'));
    }
}

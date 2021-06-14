<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.nipa.customer.view');
    }
    public function create()
    {
        return view('admin.nipa.customer.create');
    }
    public function search()
    {
        return view('admin.nipa.customer.search');
    }
    public function import()
    {
        return view('admin.nipa.customer.import');
    }

    
}

<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\CountryName;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CountryNameController extends Controller
{

    public function index()
    {
        $data = CountryName::orderBy('id', 'ASC')->get();
        return view('admin.nipa.country-name.index', compact('data'));
    }

 
}

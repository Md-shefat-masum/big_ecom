<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelperController extends Controller
{

    public static function auth_full_name(){
        return Auth::user()->first_name.' '.Auth::user()->last_name;
    }
}

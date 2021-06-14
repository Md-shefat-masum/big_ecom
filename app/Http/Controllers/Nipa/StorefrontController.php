<?php

namespace App\Http\Controllers\Nipa;

use App\Http\Controllers\Controller;
use App\Models\Storefront;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorefrontController extends Controller
{
    public function logo()
    {
        return view('admin.nipa.storefront.logo');
    }
    public function social_media()
    {
        return view('admin.nipa.storefront.social-media');
    }
    public function web_pages()
    {
        return view('admin.nipa.storefront.web-pages');
    }
    public function create_web_pages()
    {
        return view('admin.nipa.storefront.create-web-pages');
    }
    public function email()
    {
        return view('admin.nipa.storefront.email');
    }
   
    
}

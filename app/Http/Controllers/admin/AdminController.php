<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    function dashboard($lang ='en'){
        App::setLocale($lang);
        return view('admin.dashboard');
    }
}

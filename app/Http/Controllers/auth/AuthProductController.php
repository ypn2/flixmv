<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthProductController extends Controller
{
    function list(){
        return view('auth.product');
    }
}

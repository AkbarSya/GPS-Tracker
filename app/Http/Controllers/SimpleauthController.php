<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;

class SimpleauthController extends Controller
{
    public function register()
    {
    	return view('manage.register');
    }
}

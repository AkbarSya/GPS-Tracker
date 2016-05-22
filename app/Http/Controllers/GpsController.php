<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Input;

class GpsController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
	

 	public function getGps()
 	{ 		
 		return view('manage.gps', ['input' => Input::paginate(5)]);
 	}
}

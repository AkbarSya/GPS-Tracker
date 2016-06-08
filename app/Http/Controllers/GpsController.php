<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Input;
use App\Lokasi;

class GpsController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth');
    }
	

 	public function getGps()
 	{ 		
 		$maps = Lokasi::orderBy('id','desc')->paginate(100);
 		$input = Input::orderBy('id','desc')->paginate(10);
 		return view('manage.gps')->with('input', $input)->with('maps', $maps);


 	}
}

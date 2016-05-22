<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Driver;
use App\Pool;

class DriverController extends Controller
{

	    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
    	return view ('manage.driver');
    }

    public function getDriver()
    {
    	$pool = Driver::where('status','ON GOING')->orderBy('id','desc')->paginate(1);
        return view('driver.pool')->with('pool', $pool);
    }

    public function postDriver(Request $r)
    {
        $this->validate($r, [
            'nama_driver' => 'required',
            'status_driver' => 'required',
            'status' => 'required',
            'update_stat' => 'required',            
        ]);

        $pool = new \App\Pool;
        $pool->nama_driver = $r->nama_driver;
        $pool->status_driver = $r->status_driver;
        $pool->status = $r->status;
        $pool->update_stat = $r->update_stat;        
        $pool->save();        
        return redirect('pool');
    }
}

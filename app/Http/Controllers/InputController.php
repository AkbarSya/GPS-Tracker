<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Driver;

class InputController extends Controller
{

	  public function __construct()
    {
        $this->middleware('auth');
    }

	
    public function getInput()
    {	
    	$driver_ready = Driver::where('status','READY')->get();
    	return view('manage.input',['driver_ready'=>$driver_ready]);
    }

    public function postInput(Request $r)
    {
    	$this->validate($r, [
	        'driver_id' => 'required',
	        'company_name' => 'required',
	        'company_address' => 'required',
	        'duration' => 'required',
	        'nama_barang' => 'required',
	        'jumlah_barang' => 'required'
	    ]);

	    $input = new \App\Input;
	    $input->driver_id = $r->driver_id;
	    $input->company_name = $r->company_name;
	    $input->company_address = $r->company_address;
	    $input->duration = $r->duration;
	    $input->nama_barang = $r->nama_barang;
	    $input->jumlah_barang = $r->jumlah_barang;
	    $input->save();

	    $driver = Driver::find($r->driver_id);
	    $driver->status = 'ON GOING';
	    $driver->save();
    	return redirect('gps');
    	
    }

    public function getPool()
    {
    	return view('manage.pool');
    }
}

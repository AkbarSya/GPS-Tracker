<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Driver;
use Mail;

class StatusController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }	
	
    public function getStatus()
    {
        $no = 1;
        $driver = Driver::paginate(100);
    	return view('manage.status',['no'=>$no,'driver'=>$driver]);
    }

    public function postStatus(Request $r)
    {
     $this->validate($r, [
            'nama_driver' => 'required',
            'status' => 'required',            
        ]);

        $driver = new \App\Driver;
        $driver->nama_driver = $r->nama_driver;
        $driver->status = $r->status;  
        $driver->email = $r->email;      
        $driver->save();
        $isi = \App\Driver::orderBy('id', 'desc')->first();

        $user = new \App\User;
        $user->name = $isi->nama_driver;
        $user->email = $isi->email;
        $user->password = bcrypt('driver1');
        \Session::flash('password', 'driver1');
        $user->save();

        $data = \App\User::orderBy('id', 'desc')->first();


         Mail::send('driver.mail', ['isi' => $isi, 'data'=>$data], function ($m) use ($isi) {
            $m->to($isi->email, $isi->nama_driver)->subject('Akses GPSTracker');
        });

        return redirect('status');

    }
    }

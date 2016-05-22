<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Email;
use Mail;
use Carbon\Carbon;

class ComposeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


	
    public function getCompose()
    {
    	return view('manage.compose');
    }

    public function readMail($id)
    {
        $email = Email::where(['id'=>$id])->first();
        // dd($email);
        // return array($email);
        return view('manage.read-mail')->with('key', $email);
    }


    public function postCompose(Request $requestData)
    {
    	$email = new Email;
    	$email->sender = 	$requestData->sender;
    	$email->receiver = 	$requestData->receiver;
    	$email->receiver_name = $requestData->receiver_name;
    	$email->subject = $requestData->subject;
    	$email->fill = $requestData->fill;
    	$email->save();

    	Mail::send('manage.reply',['fill'=>$requestData->fill,'receiver_name'=>$requestData->receiver_name],function($m) use($requestData){
    		$m->from('akbar.sya19@gmail.com',$requestData->subject);
    		$m->to($requestData->receiver,$requestData->receiver_name)->subject($requestData->subject);
    	});

    	return redirect('home');


    }
}

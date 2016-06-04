<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|AIzaSyDwpStTKOlXsBE9P21147ZSuhNqt_8YWGk
*/



Route::group(['middleware' => ['web']], function() {
	Route::get('login','Auth\AuthController@getLogin');
	Route::post('login','Auth\AuthController@postLogin');
	Route::get('logout','Auth\AuthController@getLogout');

	
	Route::get('home', 'HomeController@index');
	Route::post('home', 'HomeController@email');
	Route::get('/', function () {
		// dd(Auth::user());	
	    return redirect('home');
	});
	Route::get('mail','MailController@getMail');
	Route::get('compose','ComposeController@getCompose');
	Route::post('compose','ComposeController@postCompose');
	Route::get('read-mail/{id}','ComposeController@readMail');
	
	Route::get('status','StatusController@getStatus');
	Route::post('status','StatusController@postStatus');
	Route::get('driver','DriverController@index');
	Route::get('pool','DriverController@getDriver');
	Route::post('pool','DriverController@postDriver');

	Route::get('gps','GpsController@getGps');
	Route::get('input','InputController@getInput');
	Route::post('Input','InputController@postInput');	
	Route::get('ismail','MailController@ImapEmail');

	Route::get('/api/login', 'ApiController@login');
	Route::get('/api/logout','ApiController@logout');
	Route::get('/api/simpanlokasi','ApiController@simpanlokasi');
	Route::get('/api/ambillokasi','ApiController@ambilLokasi');



// 	Route::get('/mandrill',function ()
// {
// 	$a = new Mandrill("_C4gRd_RxE-JskVlDK8wrQ");
// 	$message = array(
//         'html' => '<p>halo kalian semua, <br><img src="http://setya.me/wp-content/uploads/2015/10/0fe03d5.jpg"></p>',
//         'text' => 'Te st,',
//         'subject' => 'Hai',
//         'from_email' => 'dyorizqal7@gmail.com',
//         'from_name' => 'Dyo Rizqal ',
//         'to' => array(
//             array(
//                 'email' => 'akbar.syabani@gmail.com',
//                 'name' => 'Akbar Syabani',
//                 'type' => 'to'
//             )
//         ),
//         'headers' => array('Reply-To' => 'a@setya.me',
//                             'X-MC-Track'=> 'opens, clicks_textonly'),
//         'important' => TRUE,
//         'track_opens' => TRUE,
//         'track_clicks' => TRUE
//     );
//     $async = false;
//     $ip_pool = '103.27.206.159';
//     $send_at = null;
//     $result = $a->messages->send($message, $async, $ip_pool, $send_at);
// 	echo "<pre>".print_r($result,1)."</pre>";
// });



});


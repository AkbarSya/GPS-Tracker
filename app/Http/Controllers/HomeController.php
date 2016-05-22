<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Email;
use App\Pool;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $email = Email::orderBy('id','desc')->paginate(10);
            $driver = Pool::orderBy('id','desc')->paginate(10);
            return view('manage.home')->with('email', $email)->with('pool', $driver);

    }
    public function email()
        {
            $email = DB::select('select * from emails',[1]);
            return view('manage.home', ['emails'=>$email]);

        }

    // public function search_post($search)
    //     {
    //     $i = 1;
    //     $data = \App\dt_blog::where('dt_blog_title', 'LIKE', '%'.$search.'%')->orderBy('id','desc')->get();
    //     // return $data;
    //     foreach ($data as $dt_blog_all_news) {
    //     $string = strip_tags($dt_blog_all_news->dt_blog_text);

    //     if (strlen($string) > 300) {

    //     // truncate string
    //     $stringCut = substr($string, 0, 300);

    //     // make sure it ends in a word so assassinate doesn't become ass...
    //     $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
    //     }
    //     echo 
    //     "<a href=".url('view/'.$dt_blog_all_news->id).">
    //     <div class=\"content1-box\">
    //     <img class=\"cb-img\" src=".url('images/'.$dt_blog_all_news->cover_photo)." />
    //     <div class=\"cb-title\">
    //     ".$dt_blog_all_news->dt_blog_title."
    //     </div>
    //     <div class=\"cb-desc\">
    //     ".$string."

    //     </div>
    //     <div class=\"cb-inf\">
    //     <i class=\"fa fa-user\"></i> ".$dt_blog_all_news->dt_blog_create_by ." - ".($dt_blog_all_news->dt_blog_by)."
    //     <p class=\"cb-date\">
    //     ".$dt_blog_all_news->created_at."
    //     </p>
    //     </div>
    //     </div>
    //     </a>";
    //     $i++;
    //     }
    //     }

    //     <script>
    //         $.ajaxSetup({
    //         headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')} });
    //         $('input[name=search]').keyup(function(e){
    //         // alert('asdasd');
    //         setTimeout(function(){
    //         $('.content1-box-all').html('<div class="content1-box-all">Loading...</div>');
    //         $.ajax({
    //         'type': 'GET',
    //         'url': '{{url("search_post")}}/'+$('input[name=search]').val(),
    //         'success': function(data){
    //         if (data) {
    //         $('.content1-box-all').html(data);
    //         }else{
    //         $('.content1-box-all').html('<div class="content1-box-all">Pencarian tidak ditemukan..</div>');
    //         }
    //         }
    //         });
    //         }, 500);
    //         });
    //     </script>

}

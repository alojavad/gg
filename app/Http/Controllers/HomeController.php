<?php namespace App\Http\Controllers;
use App\news;
use DB;
use URL;
use Auth;
use Input;
use Config;
use Request;
use Redirect;
use Response;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $titr1 = news::where('publi',6)->where('admin',1)->orderBy('created_at', 'desc')->first();
        $titr = news::where('publi',6)->where('admin',1)->orderBy('created_at', 'desc')->skip(1)->take(4)->get();
        $spec1 = news::where('publi',4)->where('admin',1)->orderBy('created_at', 'desc')->first();
        $spec2 = news::where('publi',4)->where('admin',1)->orderBy('created_at', 'desc')->skip(1)->first();
        $spec3 = news::where('publi',5)->where('admin',1)->orderBy('created_at', 'desc')->first();
        $spec4 = news::where('publi',5)->where('admin',1)->orderBy('created_at', 'desc')->skip(1)->first();
        $best = news::where('publi',3)->where('admin',1)->orderBy('created_at', 'desc')->take(8)->get();
        $lastk = news::where('dep',1)->where('admin',1)->orderBy('created_at', 'desc')->take(30)->get();
        $lasts = news::where('dep',2)->where('admin',1)->orderBy('created_at', 'desc')->take(30)->get();
        $lastt = news::where('dep',3)->where('admin',1)->orderBy('created_at', 'desc')->take(30)->get();
        $lastso = news::where('dep',4)->where('admin',1)->orderBy('created_at', 'desc')->take(30)->get();
		return view('home')->with(array('titr1' => $titr1,'titr' => $titr, 'spec1' => $spec1, 'spec2' => $spec2,
            'spec3' => $spec3, 'spec4' => $spec4, 'best' => $best, 'lastk' => $lastk, 'lasts' => $lasts,
            'lastt' => $lastt, 'lastso' => $lastso));
	}

}

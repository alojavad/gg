<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Tracker;
use Device;
use Agent;
use App\news;
use DB;
use URL;
use Auth;
use Input;
use Config;
use Redirect;
use Response;
use Guard;
use Illuminate\Http\Request;
class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('homes');
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getVisits()
    {
        $sessions = Tracker::pageViews(60 * 24);
        return view('visits')->with('data' , $sessions);
        //
    }

    public function getNews()
    {
        $data = DB::table('news')->orderBy('created_at','desc')->paginate(10);
        $data->setPath('news');
        return view('news.listnews')->with('data',$data);
        //
    }

    public function getComment()
    {
        $data = DB::table('comment')->orderBy('created_at','desc')->paginate(10);
        $data->setPath('comment');
        return view('news.listcomment')->with('data',$data);
        //
    }

    public function getReplay()
    {
        $data = DB::table('replay')->orderBy('created_at','desc')->paginate(10);
        $data->setPath('replay');
        return view('news.listreplay')->with('data',$data);
        //
    }

    public function getHome()
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
        return view('admin.home')->with(array('titr1' => $titr1,'titr' => $titr, 'spec1' => $spec1, 'spec2' => $spec2,
            'spec3' => $spec3, 'spec4' => $spec4, 'best' => $best, 'lastk' => $lastk, 'lasts' => $lasts,
            'lastt' => $lastt, 'lastso' => $lastso));
        //
    }

    public function getPublishComment($id)
    {
        DB::table('comment')
            ->where('id', $id)
            ->update(array(
                'name' => Auth::user()->name
            ));
        return  redirect()->back();
    }

    public function getNotPublishComment($id)
    {
        DB::table('comment')
            ->where('id', $id)
            ->update(array(
                'name' => ''
            ));
        return redirect()->back();
    }

    public function getPublishReplay($id)
    {
        DB::table('replay')
            ->where('id', $id)
            ->update(array(
                'name' => Auth::user()->name
            ));
        return  redirect()->back();
    }

    public function getNotPublishReplay($id)
    {
        DB::table('replay')
            ->where('id', $id)
            ->update(array(
                'name' => ''
            ));
        return redirect()->back();
    }

    public function getSearch(){


//get the q parameter from URL
        $q=$_GET["q"];

        $data = DB::table('tag')->select('title','id')->where('title', 'LIKE', "%$q%")->get();
        return $data;
        $hint="";
        foreach ($data as $db)
        {
            if ($hint=="") {
                $hint="<code > " .
                    $db->title . "</code>";
            } else {
                $hint=$hint . "<br /><code > " .
                    $db->title . "</code>";
            }

        }


// Set output to "no suggestion" if no hint was found
// or to the correct values
        if ($hint=="") {
            $response="no suggestion";
        } else {
            $response=$hint;
        }

//output the response
        echo $response;
    }


}

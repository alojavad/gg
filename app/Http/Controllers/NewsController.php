<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\news;
use DB;
use URL;
use Auth;
use Input;
use Config;
use Redirect;
use Response;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $data = DB::table('news')->orderBy('created_at', 'desc')->paginate(5);
        $data->setPath('news');
        return view('news.listnews')->with('data',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

        return view('news.createnews');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $datetime = new \DateTime;
        $data = Input::only('title', 'image', 'abst', 'desc','dep','refre','publi');
        if ($data) {
            if (1) {
                DB::table('news')->insert(array(
                    'title' => $data['title'],
                    'dep' => $data['dep'],
                    'publi' => $data['publi'],
                    'admin' => Auth::id(),
                    'refre' => $data['refre'],
                    'image' => $data['image'],
                    'abst' => $data['abst'],
                    'descr' => $data['desc'],
                    'created_at' => $datetime
                ));
                return redirect()->back();
            }else{
                return view('layout.lnews')->with('data',"");
            }
        }else{
            return view('layout.lnews')->with('data',"");
        }
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
        $news=DB::table('news')->where('id', $id)->first();
        $comment=DB::table('comment')->where('news_id','=',$id)->where('name','=','javad hajiyan')->get();
        $replay=DB::table('replay')->join('comment', function($join)
    {
        $join->on('replay.comment_id', '=', 'comment.id')->where('replay.name','=','javad hajiyan');
    })->select('replay.id','replay.vote_up'
                ,'replay.vote_down','replay.counter','replay.name','replay.comment_id','replay.descr'
                ,'replay.created_at','replay.updated_at')->get();

        return view('news.shownews')->with(array('data' => $news, 'comment' => $comment, 'replay' => $replay));
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

        $news=DB::table('news')->where('id', $id)->first();
        return view('news.editnews')->with('news',$news);
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
        $datetime = new \DateTime;
        $data = Input::only('title', 'dep',  'descr','');
        $data = Input::only('title', 'image', 'abst', 'desc','dep','refre','publi');
        if ($data) {
            if (Auth::check()) {
                DB::table('news')
                    ->where('id', $id)
                    ->update(array(
                        'title' => $data['title'],
                        'dep' => $data['dep'],
                        'publi' => $data['publi'],
                        'admin' => Auth::id(),
                        'refre' => $data['refre'],
                        'image' => $data['image'],
                        'abst' => $data['abst'],
                        'descr' => $data['desc'],
                        'updated_at' => $datetime
                    ));

                redirect('/');
            }else{
                redirect('/');
            }
        }else{
            redirect('/');
        }
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
        DB::table('news')
            ->where('id', $id)->delete();
        redirect('/');
	}

    public function getPublish($id)
    {
        DB::table('news')
            ->where('id', $id)
            ->update(array(
                'name' => Auth::user()->name
            ));
        return  redirect()->back();
    }

    public function getNotPublish()
    {
        return 'not publish';
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postScommand($id)
    {
        $datetime = new \DateTime;
        $data = Input::only('descrip');
        if ($data) {
            if (1) {
                DB::table('comment')->insert(array(
                    'vote_up' => '0',
                    'vote_down' => '0',
                    'counter' => '0',
                    'name' => Auth::user()->name,
                    'news_id' => $id,
                    'descr' => $data['descrip'],
                    'created_at' => $datetime
                ));
                return redirect()->back();
            }else{
                return redirect()->back()->with('dat',"لطفا در  سایت ثبت نام کنید");
            }
        }else{
            return redirect()->back()->with('dat',"لطفا متن خود را تایپ نمایید");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function postSreplay($id)
    {
        $datetime = new \DateTime;
        $data = Input::only('descript');
        if ($data) {
            if (1) {
                DB::table('replay')->insert(array(
                    'vote_up' => '0',
                    'vote_down' => '0',
                    'counter' => '0',
                    'name' => '',
                    'comment_id' => $id,
                    'descr' => $data['descript'],
                    'created_at' => $datetime
                ));
                return redirect()->back();
            }else{
                return redirect()->back()->with('dat',"لطفا در  سایت ثبت نام کنید");
            }
        }else{
            return redirect()->back()->with('dat',"لطفا متن خود را تایپ نمایید");
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     *
     * @return Response
     */
    public function getSearch(){


//get the q parameter from URL
        $q=$_GET["q"];

        $data = DB::table('news')->select('title','id')->where('title', 'LIKE', "%$q%")->get();
        $hint="";
        foreach ($data as $db)
        {
            if ($hint=="") {
                $hint="<a href='news/$db->id' target='_blank'>" .
                    $db->title . "</a>";
            } else {
                $hint=$hint . "<br /><a href='news/$db->id' target='_blank'>" .
                    $db->title . "</a>";
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

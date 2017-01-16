<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\videolog;
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
        $count0 = videolog::where('video_id','=',0)->count();
        $count1 = videolog::where('video_id','=',1)->count();
        $count2 = videolog::where('video_id','=',2)->count();
        $count3 = videolog::where('video_id','=',3)->count();
        return view('home',compact('count0','count1','count2','count3'));
    }

    public function videolog(Request $request)
    {
        $videolog=new videolog;
            $videolog->user_id=Auth::user()->id;
            $videolog->video_id=$request['video'];
            $videolog->save();
       
    }
}

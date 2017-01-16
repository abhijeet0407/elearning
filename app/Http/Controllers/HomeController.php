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
        return view('home');
    }

    public function videolog(Request $request)
    {
        $videolog=new videolog;
            $videolog->user_id=Auth::user()->id;
            $videolog->video_id=$request['video'];
            $videolog->save();
       
    }
}

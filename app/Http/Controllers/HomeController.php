<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\videolog;
use App\User;
use Illuminate\Support\Facades\Validator;
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
    public function index(Request $request)
    {
        //return $request->session()->get('UserLoginId');
        $count0 = videolog::where('video_id','=',0)->count();
        $count1 = videolog::where('video_id','=',1)->count();
        $count2 = videolog::where('video_id','=',2)->count();
        $count3 = videolog::where('video_id','=',3)->count();
        return view('home',compact('count0','count1','count2','count3'));
    }

    
    public function changepassword(Request $request){
        if(Auth::user()->id!=''){

            $validator = Validator::make($request->all(), [
            'password' => 'required|min:6',
            ]);

            if ($validator->fails()) {
                return 'Password should be atleast 6 characters';
            }
         
            $user=User::find(Auth::user()->id);
            $user->password=bcrypt($request['password']);
            $user->save();
            return 'Password Changed successfully';


        }
    }

    public function videologcount(Request $request)
    {
        $check_video=videolog::where('video_id','=',$request['video'])->where('userlog_id','=',$request->session()->get('UserLoginId'))->count();
        if($check_video==0){
        $videolog=new videolog;
            $videolog->user_id=Auth::user()->id;
            $videolog->video_id=$request['video'];
            $videolog->userlog_id=$request->session()->get('UserLoginId');
            $videolog->save();
        }    
       
    }
}

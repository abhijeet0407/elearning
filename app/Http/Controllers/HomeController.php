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
        //$this->middleware('auth');
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

    public function forgotpasssubmit(Request $request){
        $user=User::where('email','=',$request['email'])->where('remember_token','=',$request['tok'])->first();  
        $user->password=bcrypt($request['password']);
        $user->save();
        return 1;

    }
     public function forgotpass(Request $request){
         $user=User::where('email','=',$request['email'])->where('remember_token','=',$request['token'])->first();
         return view('forgotpass',compact('user'));
     }
    public function forgotpassword(Request $request){

        $user=User::where('email','=',$request['email'])->first();

        $random = substr( md5(rand()), 0, 7);
        
        $user->remember_token=$random;

        $user->save();


        if(count($user)>0){

            /**/
             $to2=$request['email'];
//$to='abhishek@digitalvibe.in';
$subject2 = 'hrjohnsonindia.com e-Learning application - Change password request';


$message2='<table width="580" cellpadding="0" cellspacing="0" align="center">
            <tr>
                <td align="center" style="font-family: Arial;color:#707070;font-size: 12px; background-color:#f8f8f8; padding:10px 10px;">
                    <table style="width:580px;border:1px solid #081d5f;" cellspacing="0" cellpadding="0">
                    
                    <tr>
                    <td>
                    <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                    <td width="300" style="background-color:#e4e4e4;"><img  style=" width: 80%;
      padding: 20px;" src="http://www.hrjohnsonindia.com/images/logo-johnson.png"/></td>
                     <td width="300" style="background-color:#ed1c24;padding: 20px;">
                    <table width="100%">
                    <tr>
                    <td style="padding-left:5px;padding-right:5px; "><img align="absmiddle" src="http://johnsonstore.in/images/customer-care-logo-emailer_03.jpg"/></td>
                    <td><a style="color:#fff; text-decoration:none; font-size:14px; font-family:Arial, Helvetica, sans-serif;" href="mailto:customercare@hrjohnsonindia.com">customercare@hrjohnsonindia.com</a></td>
                    </tr>
                    <tr>
                    <td style="padding-left:5px; padding-right:5px;"><img align="absmiddle" src="http://johnsonstore.in/images/mailer-phone-icon_03.jpg"/></td>
                    <td style="color:#fff;font-size:14px; font-family:Arial, Helvetica, sans-serif;">+91-22-30647300<br/> +91-22-26547300</td>
                    </tr>
                    </table>
                    </td> 
                    </tr>
                    </table>
                    </td>
                    </tr>
    
                            <tr>
                            <td align="left" style="background-color:#f8f8f8; padding:30px 16px;">
                                <div>
                            <span style="color:#2e2e2e; font-size:15px; font-weight:700; margin-bottom:10px; display:inline-block;">Hi '.$user->name.',</span>
                                
                                
                                   <p style="color:#2e2e2e;font-size:17px; margin:0px ; padding:0px; line-height:24px; font-weight:100;"> Please click on the link and submit new password to update your password. </p>
                                   
                                  
                                   
                                   
                                
                               <table style="width:100%;color: #2e2e2e;font-size: 15px;margin: 0px;padding: 0px;line-height: 5px;font-weight: 100; border: 1px solid #eaeaea;">';
            $message2.='<tr>
                            <td style=" width:100%">
                            <table style="width:100%;" border="0" style="  border-collapse: collapse;">
                            <tr>
                                <th align="right"  style="width:35%; line-height:24px;">Change Password Link: </th>
                                    <td align="left" style="width:65%; padding:10px; line-height:24px;"><a href="https://www.hrjohnsonindia.com/elearning/public/forgotpass?email='.$request['email'].'&token='.$random.'">Link</a></td>
                                </tr>
                                
                                
                                
                                
                                
                                
                                ';
                                
        
        $message2.='</table>
                                   
                                   
                                   <div style="width:200px;color: #2e2e2e;font-size: 15px;margin: 0px;padding: 0px; margin-left:16px; line-height: 16px;font-weight: 100;">
                                   <p style="margin-top:40px; color:#ed1c24; font-size:14px; font-weight:700; margin-bottom:5px;">Regards,</p>
                                    <p style="margin:0px;"><strong>Marketing Team</strong></p>
                                    <p style="margin:0px;"><strong>H & R Johnson</strong></p>
                                    <p style="margin:0px;">Windsor, 7th Floor,</p>
                                    <p style="margin:0px;">C.S.T. Road, Kalina, </p>
                                    <p style="margin:0px;">Santacruz (East),  </p>
                                    <p style="margin:0px;"> Mumbai - 400 098,</p> 
                                    <p style="margin:0px;">India. </p>
                                    </div>
                                
                               
                                
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                        
                                
                                <div class="footer" style="height:40px; background-color:#2e2e2e; padding:25px 16px;">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                <td width="40%">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                <td style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:400;">© 2016 <span style="font-weight:700;">H & R JOHNSON</span></td>
                                </tr>
                                <tr>
                                <td style="padding-top:5px; color:#fff; font-weight:400; font-family:Arial, Helvetica, sans-serif; font-size:14px;">Find Us: <a href="https://www.facebook.com/HRJIndia" target="_blank"><img align="absmiddle" src="http://johnsonstore.in/images/mailer-facebook_03.jpg"/></a> <a href="https://twitter.com/Hrjohnsonindia" target="_blank"><img align="absmiddle" style="margin-right:5px;" src="http://johnsonstore.in/images/mailer-twitter_03.jpg"/></a><a href="https://www.youtube.com/user/Hrjohnsonindia1" target="_blank"><img align="absmiddle" src="http://johnsonstore.in/images/mailer-youtube_03.jpg"/></a></td>
                                </tr>
                                </table>
                                </td>
                                <td width="60%">
                                <table width="100%" cellpadding="0" cellspacing="0" align="right">
                                <tr>
                                <td align="left" style="color:#fff; font-size:14px; font-weight:400; font-family:Arial, Helvetica, sans-serif; padding-bottom:10px;"><img align="absmiddle" src="http://johnsonstore.in/images/mailer-website-icn_03.jpg"/> Website:&nbsp;</td>
                                <td style="padding-bottom:10px;"><a href="http://johnsonbathrooms.in/" target="_blank" style="color:#fff; text-decoration:none; font-weight:700; font-size:14px;">www.hrjohnsonindia.com</a></td>
                                </tr>
                               
                                <tr>
                                <td align="left" style="color:#fff; font-size:14px; font-weight:400; font-family:Arial, Helvetica, sans-serif;"><img align="absmiddle" src="http://johnsonstore.in/images/mailre-timing-icn_03.jpg"/> Working hours:&nbsp;</td>
                                <td style="color:#fff;font-weight:700; font-size:14px;">10:00am to 06:00pm</td>
                                </tr>
                                <tr>
                                <td colspan="2"><span style="color:#fff; font-size:11px; float:right; padding-right:50px; padding-top:5px;">(Monday to Saturday)</span></td>
                                </tr>
                                </table>
                                </td>
                                </tr>
                                </table>
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From:Johnson India <noreply@hrjohnsonindia.com>' . "\r\n";



$mail = mail($to2,$subject2,$message2,$headers);
            /**/
            return 1;
        }else{
            return 2;
        }


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

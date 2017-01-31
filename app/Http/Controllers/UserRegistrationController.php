<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\User;
use App\userlog;
use App\userlogout;
use App\videolog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Redirector;
class UserRegistrationController extends Controller
{
    //
    public function index()
    {
    	$user=User::where('id','!=',1)->get();
    	return view('registerlist',compact('user'));

    }

    public function destroy(Request $request){
        return $request;
        $abc=User::find($request['id']);
        return $abc;
    }

    public function userlog()
    {
        $userlog=userlog::where('user_id','!=',1)->get();
        $user=User::where('id','!=',1)->get();
        $userlogout=userlogout::where('user_id','!=',1)->get();
        
        return view('userlog',compact('user','userlog','userlogout'));

    }

    public function videolog()
    {
        $videolog2=videolog::where('user_id','!=',1)->groupby('userlog_id')->get();
        $videolog=videolog::where('user_id','!=',1)->get();
        $user=User::where('id','!=',1)->get();
        return view('videolog',compact('user','videolog','videolog2'));

    }


     public function __construct(Redirector $redirect)
    {
        $this->middleware('auth');
        if(Auth::user()->id!=1){
             $redirect->to('/')->send();
        }
    }

    public function create()
    {
    	
    	return view('register');

    }

    protected function store(Request $request)
    {

    	$validator = Validator::make($request->all(), [
                  'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'empid' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
            ]);

            if ($validator->fails()) {
                return redirect('userregister')
                            ->withErrors($validator)
                            ->withInput();
            }
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'empid' => $request['empid'],
            'password' => bcrypt($request['password']),
        ]);

         /**/

         $to2=$request['email'];
//$to='abhishek@digitalvibe.in';
$subject2 = 'Welcome to hrjohnsonindia.com e-Learning application';


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
							<span style="color:#2e2e2e; font-size:15px; font-weight:700; margin-bottom:10px; display:inline-block;">Hi '.$request['name'].',</span>
								
								
								   <p style="color:#2e2e2e;font-size:17px; margin:0px ; padding:0px; line-height:24px; font-weight:100;">You are registered with H & R JOHNSON e-Learning application. Your Login Credentials are as follows. </p>
								   
								  
								   
								   
								
                               <table style="width:100%;color: #2e2e2e;font-size: 15px;margin: 0px;padding: 0px;line-height: 5px;font-weight: 100; border: 1px solid #eaeaea;">';
			$message2.='<tr>
							<td style=" width:100%">
							<table style="width:100%;" border="0" style="  border-collapse: collapse;">
							<tr>
								<th align="right"  style="width:35%; line-height:24px;">Application Link: </th>
									<td align="left" style="width:65%; padding:10px; line-height:24px;"><a href="https://www.hrjohnsonindia.com/elearning/public/login">Link</a></td>
								</tr>
								
								
								<tr>
								<th align="right"  style="width:35%; line-height:24px;">Username: </th>
									<td align="left" style="width:65%; padding:10px; line-height:24px;">'.$request['empid'].'</td>
								</tr>
								
								<tr>
								<th align="right"  style="width:35%;line-height:24px;">Password: </th>
									<td align="left" style="width:65%; padding:10px line-height:24px;;">'.$request['password'].'</td>
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

         return redirect('/userregister');


    }


}

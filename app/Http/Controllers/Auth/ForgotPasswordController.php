<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use App\User;
use Session;
use App\ogrenci;
use Illuminate\Support\Facades\Redirect;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */
 use SendsPasswordResetEmails;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
	public function showLinkRequestForm3(Request $request)
	{
		//return view('auth.passwords.email');
		$email=$request->input('email');
		$yenipass=$request->input('yenipass');
		$password_confirmation=$request->input('password_confirmation');

		if($yenipass==$password_confirmation){

			$semboller = "1234567890abcdefGHIJKLMNOPQRSTUVWxyzABCDEFghijklmnopqrstuvwXYZ1234567890";
			$sifre="";
			for($i=0;$i<7;$i++){
				$sifre .= $semboller{rand() % 39};
			}





			User::where('email', '=', $email)
			    ->update(array(
				    'remember_token' =>  $sifre

			    ));
			$User_Email_Paketi=User::where('email', '=', $email)->first();
			$id=$User_Email_Paketi->id;//User tablosuna eklenen verinin Id'si
			$User_Id_Paketi=ogrenci::where('User_Id', '=', $id)->first();
			$Tel_No=trim($User_Id_Paketi->Tel_No);//Öğrencinin telefon numarasını alıyoruz
			function sendRequest($xml) {

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL,'http://api.iletimerkezi.com/v1/send-sms');
				curl_setopt($ch, CURLOPT_POST, 'true');
				curl_setopt($ch, CURLOPT_POSTFIELDS,$xml);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,2);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
				curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_TIMEOUT, 120);
				$result = curl_exec($ch);

				return $result;

			}

			$username   = '5399771515';
			$password   = '5399771515';
			$orgin_name = 'UZEM.TV';
			$xml ="
                 <request>
                     <authentication>
                         <username>{$username}</username>
                         <password>{$password}</password>
                     </authentication>
        
                     <order>
                         <sender>{$orgin_name}</sender>
                         <sendDateTime></sendDateTime>
                         <message>
                             <text>Şifre Yenileme Kodunuz : {$sifre}</text>
                             <receipents>
                                 <number>{$Tel_No}</number>
                             </receipents>
                         </message>
                     </order>
                 </request>
                ";



			$result = sendRequest($xml);


			return  view('auth.passwordyeni')->with('email',$email)->with('yenipass',$yenipass);
		}else{
			return  Redirect::back()->with('status','Şifreleriniz Uyuşmuyor');
		}
	}
	public function showLinkRequestForm2(Request $request)
	{
		$kod=$request->input('kod');
		$email=$request->input('email');
		$yenipass=$request->input('yenipass');

		$User_Email_Paketi=User::where('email', '=', $email)->first();
		$token=$User_Email_Paketi->remember_token;//User tablosuna eklenen verinin Id'si
		if($kod==$token){
			//return  view('auth.passwordsifirla')->with('email',$email);


			User::where('email', '=', $email)
			    ->update(array(

				    'password' => bcrypt($yenipass)

			    ));
			return  Redirect::home()->with('status','Şifreniz Değiştirilmiştir.');
		}
		return  Redirect::back()->with('status','Lütfen kodu doğru bir şekilde yazınız.')->with('email',$email)->with('yenipass',$yenipass);
	}

	public function SifreYenileme(){

		return "ss";

	}
}

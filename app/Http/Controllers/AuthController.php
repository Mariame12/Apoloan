<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class AuthController extends Controller
{

    //public $apilink="https://api.oumardev.com/apoloanapi/";
    function list(){
        
        $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->get("http://www.oumardev.com:5400/apoloanapi/user")->json();
        //echo var_dump($response['user']['nom']);
        return view('Utilisateurs.list',['response'=>$response]);
    }

    public function index()
    {
        return view('Presentation.accueil');
    }  
   
    public function login()
    {
        $response= Http::post('http://www.oumardev.com:5400/apoloanapi/login')->json();
        return view('Utilisateurs.login');
    }
    public function logout()
    {
        setcookie("token", "", time() - 3600);

        return redirect()->route('index');

    } 
    public function register()
    {
        return view('Utilisateurs.register');

    } 
 
    public function Refil( Request $request){
        
        return view('Utilisateurs.refil');
    }

    public function userInfo()
    {
        if (isset($_COOKIE['token'])) {
         $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->get("http://www.oumardev.com:5400/apoloanapi/user")->json();
            return view('Utilisateurs.userinfo',['response'=>$response]);
            // var_dump($response);

           }  
          else{
              return view('Presentation.accueil');
          }
    }

    public function FunctionName()
    {
        # code...
    }



    public function Registersave(Request $request){
        $this->validate($request, [
            'nom'=>'regex:/^[a-zA-Z ]+$/',
            'prenom' => 'regex:/^[a-zA-Z ]+$/',
            'numero'=> 'required',
            'password' => 'required',            
        ]);
        if(isset($response["error"])){
            
            return redirect()->route('register')->with('error',$response["error"]);
            
        }
        else{
            $response=Http::withHeaders(['Authorization' =>"Bear ".$_COOKIE['token']])->post('http://www.oumardev.com:5400/apoloanapi/register', [
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'numero' =>intval( $request->numero),
                'password' => $request->password,
            ])->json();
            return view('Presentation/menu');
        }
        //echo var_dump($response);
       

        
    }

    public function LoginSave( Request $request)
    {
        $response = Http::post('http://www.oumardev.com:5400/apoloanapi/login', [

            'numero' =>intval( $request->numero),
           'password' => $request->password,
         ])->json();
        
        if(isset($response["error"])){
            
            return redirect()->route('login')->with('error',$response["error"]);
            
        }
        else{
            $cookie_name = "token";
            $cookie_value = $response["token"];
            setcookie($cookie_name, $cookie_value, time()+ (86400), "/");

          $response=Http::withHeaders(['Authorization' =>"Bear $cookie_value"])->post("http://www.oumardev.com:5400/apoloanapi/login");
          return view('Presentation.menu');
         // $_COOKIE['token']
            
        }
        
    }
    
}

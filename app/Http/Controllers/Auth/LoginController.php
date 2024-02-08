<?php

namespace App\Http\Controllers\Auth;

use App\Models\Users;
use Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Session;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
   /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login1';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //   $this->middleware('guest')->except('logout');
    //}

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest')->except('getLogout');

    }

    public function getLogin()
    {
    return view("login");
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
         'username'=>'required',
         'password'=>'required',
]);
        
        $credentials = $request->only('username','password');
       if ($this->auth->attempt($credentials,$request->has('remember'))){
        
            $usuarioactual=\Auth::user();

            return view('welcome')->with("usuario",$usuarioactual);
        }
        return view("mensajes.error_acceso")->with("msj","Usuario o password incorrectos
        ");
        
    }

    public function getLogout()
    {
      $this->auth->logout();
      Session::flush();
      
      //Session()->forget('usuarioactual');
      return redirect ("home");
    }

    public function getRegister()
    {
        return view("register");
    }

    public function postRegister(Request $request)
    {
        $data = $request->all();
        $fecha = date("Y-m-d");

        Users::create([
        'nombre'=>$data['nombre'],
        'apellido'=>$data['apellido'],
        'direccion'=>$data['direccion'],
        'telefono'=>$data['telefono'],
        'fechaNac'=>$fecha,
        'codigo_postal'=>$data['codigo_postal'],
        'email'=>$data['email'],
        'status'=>1,
        'paises_id'=>$data['paises_id'],
        'estados_id'=>$data['estados_id'],
        'municipios_id'=>$data['municipios_id'],
        'tipos_de_usuario_id'=>$data['tipos_de_usuario_id'],
        'username'=>$data['username'],
        'password'=>Hash::make($data['password']),
        ]);

        return redirect("login1");

    }
}

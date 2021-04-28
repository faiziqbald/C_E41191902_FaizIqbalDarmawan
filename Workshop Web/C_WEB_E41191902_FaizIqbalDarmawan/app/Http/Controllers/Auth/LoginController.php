<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required|string',
            //Validasi username, Bisa berisi username/email
            'password' => 'required|string|min:6',
        ]);

        //Pengecekan, jika input berupa email, 
        //maka autentikasi akan menggunakan email
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //Tampung informasi login, dimana kolom tipe pertama bersifat dinamis
        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        //Lakukan login
        if (auth()->attempt($login)) {
            //jika berhasil login
            return redirect()->route('home');
        }
        //jika tidak berhasil login
        return redirect()->route('login')->with(['error' => 'Email atau Password salah!!']);
    }
}

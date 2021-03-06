<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function showLoginForm(){
        return view('auth.login');
    }
    
   public function login(Request $request)
    {
        $this->validateLogin($request);

        if(Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password, 'condicion' => 1])){
            return redirect('/home');
        }
        return back()->withErrors(['usuario' => trans('auth.failed')])
        ->withInput(request(['usuario']));
    } 
    
    
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'usuario' => 'required|string',
            'password' => 'required|string'
        ]);
    }
    
     public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }


    
    
    
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



    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

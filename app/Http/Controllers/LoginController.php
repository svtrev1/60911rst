<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Session; 
use App\Models\Client; 
use App\Models\Cosmetologist; 

class LoginController extends Controller
{

    public function index()
    {
        return view("auth");
    }
   public function authenticate(Request $request)
   {
        $credentiald = $request->validate([
            'email'=> ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentiald)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->withErrors([
                'success' => 'Вы успешно вошли в систему',
            ]);
        }
        return back()->withErrors([
            'error' => 'The provided crederntials do not match our records.', 
        ])->onlyInput('email', 'password');
   }

   public function login(Request $request)
   {
       return view('login', ['user' => Auth::user()]);
   }

   public function logout(Request $request): RedirectResponse
   {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    $request->session()->flush();
    return redirect('/auth')->withErrors([
        'success' => 'Вы успешно вышли из системы',
    ]);
   }
}
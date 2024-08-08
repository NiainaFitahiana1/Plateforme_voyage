<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view("auth.login");
    }
    
    public function login(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'telephone' => 'required|string|max:15',
            'password' => 'required|string|min:8',
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $credentials = $request->only('telephone', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashcompany');
        } else {
            return redirect()->intended('login')->withErrors([
                'telephone' => 'Les informations d\'identification ne correspondent pas.',
            ])->withInput()->with('login');
        }
    }
    public function forgot(){
        return view("auth.supplement.forgotpassword");
    }
}

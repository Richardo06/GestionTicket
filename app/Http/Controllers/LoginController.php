<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function index()
    {
        return view('Auth.index');
    }
    public function store(Request $request) 
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($request); 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashbord');
        }else {
             return redirect()->back()->with('error', ' Les informations que vous avez indiquer est incorrect!!!');
        }
    }
}

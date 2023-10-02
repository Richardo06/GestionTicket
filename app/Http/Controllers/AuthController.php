<?php

namespace App\Http\Controllers;

use App\Http\Requests\inscriptRequest as RequestsInscriptRequest;
use App\Http\Requests\inscriptRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function inscription()
    {
        return view('Auth.inscription');
    }
    public function store(User $user , InscriptRequest $request)
    {
        $user->name = $request->nomprenom;
        $user->email  = $request->email ;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('Auth.index')->with('success', 'Votre Compte a été crée. connectez-vous ');
        // dd($user);
    }
    

}

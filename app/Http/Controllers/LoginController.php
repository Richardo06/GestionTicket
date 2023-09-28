<?php

namespace App\Http\Controllers;
use App\Http\Requests\validateFormRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('tickets.index');
    }
    public function store(validateFormRequest $request) 
    {
        // dd($request);
        $verif = $request;
        if ($verif) {
            return view('tickets.dashbord');
        }else {
            echo ('$error');
        }
    }
}

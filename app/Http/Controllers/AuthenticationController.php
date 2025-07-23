<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => "required" ,
            'password' => "required" , 
        ]);

        if(Auth::attempt($credentials)){
            return redirect("/admin/dashboard");
        }else{
            return redirect("/login");
        }

    }

    public function register(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => "required" ,
            'password' => "required" , 
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        echo "Registration Successful";

    }

    
}

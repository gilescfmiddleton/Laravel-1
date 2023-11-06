<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserDetailsRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function register(UserDetailsRequest $request)
    {
        
        

        return "User created with email {$request->email}";

    }
}

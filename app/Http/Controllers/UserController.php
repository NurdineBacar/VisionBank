<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('onbording/authentication/signin');
    }

    public function store(Request $request){

        $user = new UserController;
    }
}

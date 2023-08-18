<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('component.login.index', [
            'title' => 'Login',
            'active' => 'login',
            'img' => 'teamsesi.jpeg',
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logins()
    {
        return view ('login');
    }
    public function register()
    {
        return view ('register');
    }
}

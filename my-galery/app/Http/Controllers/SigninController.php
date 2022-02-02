<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index()
    {
        return view('signin.index', [
            'title' => 'sign in'
        ]);
    }
}

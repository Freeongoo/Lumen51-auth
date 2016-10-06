<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function index()
    {
       return view('home');
    }

    public function successLogin()
    {
       return view('successLogin');
    }

    public function successCreateUser()
    {
       return view('successCreateUser');
    }
}
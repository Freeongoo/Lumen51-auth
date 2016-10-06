<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {

    }

    public function index()
    {
        return view('index');
    }
}

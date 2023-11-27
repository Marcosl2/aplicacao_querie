<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index()
    {
        return view('login');
    }

    //_____________________________________________________________
    // login
    //______________________________________________________________
    public function login()
    {
        return view('login');
    }

    public function login_submit()
    {
        echo 'aqui';
    }
    public function logout()
    {
        echo 'aqui logout';
    }
}

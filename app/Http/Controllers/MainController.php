<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $email;
    public function __construct()
    {

    }

    public function index() {
        return view('main.main');
    }

    public function register() {
        return view('register.register');
    }

    public function save(request $request) {



        return json_encode($request->all());

    }
}

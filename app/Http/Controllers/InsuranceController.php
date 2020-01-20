<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsuranceController extends Controller
{

    public function list() {
        return view('user.insurance.myInsurance');
    }

    public function life() {
        return view('insurance.life');
    }

    public function annuity() {
        return view('insurance.annuity');
    }

    public function employee() {
        return view('insurance.employee');
    }

    public function travel() {
        return view('insurance.travel');
    }

    public function register(array $data)
    {
        return 'hello world';
    }
    public function hello() {
        return 'hello world!!!!';
    }

}

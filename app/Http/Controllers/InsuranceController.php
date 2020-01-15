<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsuranceController extends Controller
{


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
}

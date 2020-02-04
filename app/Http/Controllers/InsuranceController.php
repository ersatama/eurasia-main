<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contract\ContractRepositoryEloquent;
use Illuminate\Support\Facades\Auth;

class InsuranceController extends Controller
{

    protected $contractRepositoryEloquent;
    public function __construct(ContractRepositoryEloquent $contractRepositoryEloquent)
    {
        $this->contractRepositoryEloquent = $contractRepositoryEloquent;
    }

    public function list() {
        $contractRepositoryEloquent = $this->contractRepositoryEloquent->contract::where('user', Auth::id())->get();
        return view('user.insurance.myInsurance', ['data' => $contractRepositoryEloquent]);
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

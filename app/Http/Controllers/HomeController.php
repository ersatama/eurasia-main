<?php

namespace App\Http\Controllers;

use App\Models\Contract\Contract;
use Illuminate\Http\Request;
use App\Repositories\Contract\ContractRepositoryEloquent;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $contract;
    public function __construct(ContractRepositoryEloquent $contact)
    {
        $this->middleware('auth');
        $this->contract = $contact;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request) {
        $data = $request->all();
        Contract::create([
            'user' => Auth::id(),
            'name' => $data['fullName'],
            'iin' => $data['iin'],
            'type' => $data['type'],
            'year' => $data['year'],
            'birth' => date('d.m.Y', strotime($data['birth'])),
            'sum' => $data['sum'],
            'prize' => $data['prize'],
            'residence' => $data['residence'],
            'country'=> $data['country'],
            'ipdl' => $data['ipdl'],
            'passport' => $data['passport'],
            'address' => $data['address'],
            'addressFact' => $data['addressFact'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'aim' => $data['aim']
        ]);

        return json_encode($request->all());

    }
}

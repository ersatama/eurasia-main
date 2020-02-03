<?php

namespace App\Http\Controllers;

use App\Models\Contract\Contract;
use Illuminate\Http\Request;
use App\Repositories\Contract\ContractRepositoryEloquent;
use Illuminate\Support\Facades\Auth;
use App\Models\Soap\Soap;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $contract;
    protected $soap;

    public function __construct(ContractRepositoryEloquent $contact, Soap $soap)
    {
        $this->middleware('auth');
        $this->soap = $soap;
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
        $id = Contract::create([
            'user' => Auth::id(),
            'name' => $data['fullName'],
            'iin' => $data['iin'],
            'type' => $data['type'],
            'start' => date('Y-m-d', strtotime($data['start'])),
            'year' => $data['year'],
            'birth' => date('Y-m-d', strtotime($data['birth'])),
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
        ])->id;

        $this->soap->start([
            'ID' => $id,
            'OperationType' => 'новый договор',
            'InsuranceProduct' => 'NSL_EB',
            'Insured' => $data['iin'],
            'Middleman' => $data['iin'],
            'PreviousID' => ($id - 1),
            'InsuredName' => $data['fullName'],
            'user' => Auth::id(),
            'name' => $data['fullName'],
            'iin' => $data['iin'],
            'type' => $data['type'],
            'start' => date('Y-m-d', strtotime($data['start'])),
            'year' => $data['year'],
            'birth' => date('Y-m-d', strtotime($data['birth'])),
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

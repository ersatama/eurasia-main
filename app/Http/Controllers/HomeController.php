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
        try {
            $data = $request->all();
            $id = Contract::create([
                'user' => Auth::id(),
                'type' => $data['type'],
                'year' => $data['year'],
                'start' => date('Y-m-d', strtotime($data['start'])),
                'birth' => date('Y-m-d', strtotime($data['birth'])),
                'sum' => $data['sum'],
                'prize' => $data['prize'],
                'sex' => $data['sex'],
                'surname' => $data['surname'],
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'iin' => $data['iin'],
                'doctype' => $data['doctype'],
                'number' => $data['number'],
                'givenBy' => $data['givenby'],
                'givenDate' => date('Y-m-d', strtotime($data['givendate'])),
                'expirationDate' => date('Y-m-d', strtotime($data['expirationdate'])),
                'residence' => $data['residence'],
                'country'=> $data['country'],
                'ipdl' => $data['ipdl'],
                'address' => $data['address'],
                'addressFact' => $data['addressFact'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'aim' => $data['aim']
            ])->id;
            return $this->soap->start([
                'ID' => $id,
                'OperationType' => 'новый договор',
                'InsuranceProduct' => 'NSL_EB',
                'Insured' => $data['iin'],
                'Middleman' => $data['iin'],
                'PreviousID' => ($id - 1),
                'user' => Auth::id(),
                'type' => $data['type'],
                'year' => $data['year'],
                'start' => date('Y-m-d', strtotime($data['start'])),
                'birth' => date('Y-m-d', strtotime($data['birth'])),
                'sum' => $data['sum'],
                'prize' => $data['prize'],
                'sex' => $data['sex'],
                'surname' => $data['surname'],
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'iin' => $data['iin'],
                'doctype' => $data['doctype'],
                'number' => $data['number'],
                'givenBy' => $data['givenby'],
                'givenDate' => date('Y-m-d', strtotime($data['givendate'])),
                'expirationDate' => date('Y-m-d', strtotime($data['expirationdate'])),
                'residence' => $data['residence'],
                'country'=> $data['country'],
                'ipdl' => $data['ipdl'],
                'address' => $data['address'],
                'addressFact' => $data['addressFact'],
                'phone' => $data['phone'],
                'email' => $data['email'],
                'aim' => $data['aim']
            ]);


        } catch (\Exception $e) {
            return response()->json(['status' => $e->getMessage()],405);
        }
    }
}

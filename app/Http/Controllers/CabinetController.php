<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Password\PasswordRepositoryEloquent;

class CabinetController extends Controller
{
    protected $password;

    public function __construct(PasswordRepositoryEloquent $password)
    {
        $this->password = $password;
    }

    public function userCabinet()
    {
        return view('user.cabinet.cabinet');
    }

    public function userCabinetSave(Request $request)
    {
        $password = $this->password->set($request->all());
        return view('user.cabinet.cabinet', ['password' => $password]);
    }
}

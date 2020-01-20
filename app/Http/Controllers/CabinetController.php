<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Password\PasswordRepositoryEloquent;
use App\Http\Requests\ChangePassword;

class CabinetController extends Controller
{
    protected $password;

    public function __construct(PasswordRepositoryEloquent $password)
    {
        $this->password = $password;
    }

    public function edit()
    {
        return view('user.cabinet.cabinet');
    }

    public function store(ChangePassword $request)
    {
        $password = $this->password->set($request->all());
        return view('user.cabinet.cabinet', ['password' => $password]);
    }
}

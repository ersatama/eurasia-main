<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChangeInfo;

class EditController extends Controller
{
    public function edit() {
        return view('user.edit.edit');
    }

    public function store(ChangeInfo $request) {
        $this->user
        return view('user.edit.edit');
    }
}

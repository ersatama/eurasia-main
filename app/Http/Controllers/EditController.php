<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    public function userEdit() {
        return view('user.edit.edit');
    }
}

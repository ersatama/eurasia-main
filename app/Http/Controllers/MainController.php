<?php

namespace App\Http\Controllers;

use App\Repositories\Email\EmailRepositoryEloquent;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $email;

    public function __construct(EmailRepositoryEloquent $email)
    {
        $this->email = $email;
    }

    public function index()
    {
        return view('main.main');
    }

    public function register()
    {
        return view('register.register');
    }

    public function save(request $request)
    {

        try {

            $email = $this->email->send($request->all());

            if ($email) {
                response()->json(['message' => 'success'], 200);
            } else {
                response()->json(['message' => 'error'], 400);
            }

        } catch (\Exception $e) {
            response()->json(['message' => $e->getMessage()], 400);
        }
    }
}

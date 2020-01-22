<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;
use App\Repositories\Sms\SmsRepositoryEloquent;

class MessageController extends Controller
{
    protected $sms;
    public function __construct(SmsRepositoryEloquent $sms)
    {
        $this->sms = $sms;
    }

    public function index() {
        return view('user.message.message');
    }

    public function verify() {
        if (Auth::user()->phone_verified_at) {
            return redirect('home');
        }
        return view('sms.confirm');
    }

    public function check(Request $request) {
        try {
            $status = $this->sms->getById($request->input('code'));
            if ($status) {
                $this->sms->verifyById(Auth::id());
                return response()->json(['status'=>200], 200);
            } else return response()->json(['status'=>404,'message'=>'Не правильный код!'], 200);
        } catch (Exception $e) {
            return response()->json(['status'=>'Произошла ошибка, попробуите ещё раз!'], 400);
        }
    }
}

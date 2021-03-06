<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Message\Message;
use App\Repositories\Sms\SmsRepositoryEloquent as SMS;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'regex:/(^([a-zA-ZА-ЯЦцУуШшЩщФфЫыРрЭэЧчТтЬьЮюЪъХхЁа-яё]+)$)/u'],
            'surname' => ['required', 'string', 'max:255', 'regex:/(^([a-zA-ZА-ЯЦцУуШшЩщФфЫыРрЭэЧчТтЬьЮюЪъХхЁа-яё]+)$)/u'],
            'lastname' => ['nullable', 'string', 'max:255', 'regex:/(^([a-zA-ZА-ЯЦцУуШшЩщФфЫыРрЭэЧчТтЬьЮюЪъХхЁа-яё]+)$)/u'],
            'iin' => ['required', 'string', 'min:12', 'max:12', 'unique:users', 'regex:/^\d+$/u'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $code = mt_rand(100000, 999999);
        $phone = $data['phone'];
        Message::create([
            'phone' => $phone,
            'code' => $code,
        ]);
        $sms = new SMS();
        $sms->sendVerify($code,$phone);

        return User::create([
            'name' => mb_convert_encoding($data['name'], 'UTF-8'),
            'surname' => $data['surname'],
            'lastname' => $data['lastname'],
            'iin' => $data['iin'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

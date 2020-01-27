<?php
namespace App\Repositories\Sms;

use App\Models\Message\Message;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SmsRepositoryEloquent implements SmsRepositoryInterface
{

    const LOGIN = 'insame';
    const PASSWORD = 'qwerty00';
    const COMPANY = 'EurasiaLife';

    public function sendVerify(int $code,$phone) {
        $phone = str_replace(' ', '-', $phone);
        $message = join('',['Ваш SMS код: ',$code,'. Никому не говорите код, даже сотрудникам КСЖ "Евразия"']);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, join('',[
            'https://smsc.kz/sys/send.php?login=',
            self::LOGIN,
            '&psw=',
            self::PASSWORD,
            '&phones=',
            $phone,
            '&sender=',
            self::COMPANY,
            '&mes=',
            $message
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
    }

    public function getById(int $code): Bool
    {
        $message = Message::where('phone', Auth::user()->phone)->first();
        if ((int) $message->code === $code) {
            return true;
        }
        return false;
    }

    public function verifyById(int $id): void
    {
        $user = User::find(Auth::user()->id);
        $user->phone_verified_at = Carbon::now();
        $user->save();
    }
}

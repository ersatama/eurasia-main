<?php
namespace App\Repositories\Sms;

use App\Models\Message\Message;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SmsRepositoryEloquent implements SmsRepositoryInterface
{
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

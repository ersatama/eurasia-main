<?php


namespace App\Repositories\Password;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordRepositoryEloquent implements PasswordRepositoryInterface
{
    final public function set(array $data): array {

    	$user = User::where('id', Auth::id())->first();
    	$user->password = Hash::make($data['new']);
    	$user->save();
        $password = Auth::user()->password;

        return ['alert-success','Пароль успешно изменен'];
    }
}

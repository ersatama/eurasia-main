<?php


namespace App\Repositories\Password;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordRepositoryEloquent implements PasswordRepositoryInterface
{
    final public function set(array $data): array {
        $password = Auth::user()->password;
        if (Hash::check($data['old'], $password)) {

            return ['alert-success','Пароль успешно изменен'];
        }
        return ['alert-danger','Не правильный пароль!'];
    }
}

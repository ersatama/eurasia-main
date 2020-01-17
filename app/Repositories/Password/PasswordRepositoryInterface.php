<?php


namespace App\Repositories\Password;


interface PasswordRepositoryInterface
{
    public function set(array $data): array;
}

<?php


namespace App\Repositories\Email;


use phpDocumentor\Reflection\Types\Boolean;

interface EmailRepositoryInterface
{
    const SITE_KEY = '6LfrS7YUAAAAAL2iwWw7CnxVdnGyY-8DEVvHc_7c';
    const SECRET_KEY = '6LfrS7YUAAAAAMtYUaHGj1mEptgRYRTO0hBLgVFI';

    public function send(array $data): Boolean;

    public function list(): String;

    public function headers(): String;

    public function subject(): String;
}

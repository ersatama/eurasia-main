<?php
namespace App\Repositories\Sms;


interface SmsRepositoryInterface
{

    public function getById(int $code): bool;

    public function verifyById(int $id):void;
}

<?php


namespace App\Repositories\Captcha;


interface CaptchaRepositoryInterface
{
    public function get(String $secret, String $key): array;
}

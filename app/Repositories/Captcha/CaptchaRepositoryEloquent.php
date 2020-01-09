<?php


namespace App\Repositories\Captcha;


class CaptchaRepositoryEloquent implements CaptchaRepositoryInterface
{
    public function get(String $secret, String $key): array
    {
        $response = file_get_contents(join('',[
            'https://www.google.com/recaptcha/api/siteverify?secret=',
            $secret,
            '&response=',
            $key
        ]));
        return json_decode($response);
    }
}

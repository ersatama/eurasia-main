<?php

namespace App\Repositories\Email;

use phpDocumentor\Reflection\Types\Boolean;
use App\Repositories\Captcha\CaptchaRepositoryEloquent as Captcha;

/**
 * Class EmailRepository.
 */
class EmailRepositoryEloquent implements EmailRepositoryInterface
{

    final public function list(): String
    {
        return join(', ', [
            'artyom.kazantsev@eulife.kz',
            '041281@inbox.ru'
        ]);
    }

    final public function headers(): String
    {

        return join('\r\n', [
            'From: ost.eurasia.com',
            'Reply-To: webmaster@example.com',
            join('', [
                'X-Mailer: PHP/',
                phpversion()
            ])
        ]);

    }

    final public function subject(): String
    {
        return 'Сообщение из формы регистрации Евразия СК';
    }

    final public function body(array $data): String
    {
        return join('', [
            'Новое письмо c сайта', "\r\n", "\r\n",
            'БИН - ', $data['BIN'], "\r\n",
            'Полное имя - ', $data['fullName'], "\r\n",
            'Резидент Казахстана - ', $data['resident'], "\r\n",
            'Банковские реквизиты - ', $data['requisites'], "\r\n",
            'Сектор экономики - ', $data['sector'], "\r\n",
            'ИИН Первого руководителя - ', $data['IIN'], "\r\n",
            'ФИО Первого руководителя - ', $data['FIO'], "\r\n",
            'Дата рождения Первого руководителя - ', date("d-M-Y", strtotime($data['birthDate'])), "\r\n",
            'ИИН Бенифициарного собственника - ', $data['IIN2'], "\r\n",
            'ФИО Бенифициарного собственника - ', $data['FIO2'], "\r\n",
            'Дата рождения Бенифициарного собственника - ', date("d-M-Y", strtotime($data['birthDate2'])), "\r\n", "\r\n",
            'Адрес места нахождения в соответствии с документом, подтверждающим регистрацию', "\r\n", "\r\n",
            'Страна - ', $data['country'], "\r\n",
            'Почтовый индекс - ', $data['index'], "\r\n",
            'Населенный пункт - ', $data['addressCity'], "\r\n",
            'Улица / район - ', $data['addressDist'], "\r\n",
            'Номер здания - ', $data['addressNum'], "\r\n",
            'Телефон - ', $data['phone'], "\r\n",
            'Адрес электронной почты - ', $data['email'], "\r\n",
            'По ПОД/ФТ - ', $data['POD'], "\r\n",
            'Является ли первый руководитель / Бенефициарный собственник иностранным публичным должностным лицом, политическим деятелем или государственным служащим иностранного государства? - ', $data['foreigner'], "\r\n",
            'Период страхования с - ', date("d-M-Y", strtotime($data['insuranceFrom'])), "\r\n",
            'Период страхования до - ', date("d-M-Y", strtotime($data['insuranceTo'])), "\r\n",
            'Территория страхования - ', $data['territory'], "\r\n",
            'Резидент Казахстана - ', $data['resident2'], "\r\n\r\n",
            'Фамилия - ', $data['touristSurname'], "\r\n",
            'Имя - ', $data['touristName'], "\r\n",
            'Дата рождения - ', date("d-M-Y", strtotime($data['touristBirthDate'])), "\r\n",
            'ИИН - ', $data['touristIIN'], "\r\n",
            'Место жительства - ', $data['touristBirthDate'], "\r\n",
            'Тип документа - ', $data['touristPass'], "\r\n",
            'Номер документа - ', $data['touristDocNum'], "\r\n",
            'Дата выдачи документа - ', date("d-M-Y", strtotime($data['touristDocDate'])), "\r\n",
            'E-mail - ', $data['touristEmail'], "\r\n",
            'Номер телефона - ', $data['touristPhone'], "\r\n"
        ]);
    }

    final public function email($subject, $body, $list): Boolean
    {
        $headers = $this->headers();
        $email = mail($list, $subject, $body, $headers);
        if ($email) {
            return true;
        } else {
            return false;
        }
    }

    final public function send(array $data): Boolean
    {

        $captcha = (new Captcha())->get(self::SECRET_KEY, $data['g-recaptcha-response']);

        if ($captcha == true && $captcha->score > .5) {
            $subject = $this->subject();
            $body = $this->body($data);
            $list = $this->list();
            return $this->email($subject, $body, $list);
        }

        return false;
    }
}

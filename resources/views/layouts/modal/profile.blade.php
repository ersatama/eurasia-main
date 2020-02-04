<div class="modal fade" style="font-size: 16px;" id="profile" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content overflow-hidden">
            <input type="hidden" id="insurance-type" value="">
            <input type="hidden" id="insurance-start" value="">
            <input type="hidden" id="insurance-year" value="">
            <input type="hidden" id="insurance-prize" value="">
            <input type="hidden" id="insurance-sum" value="">
            <input type="hidden" id="insurance-prize" value="">
            <input type="hidden" id="insurance-sex" value="">
            <div class="product__img product__img__modal" id="profile-img"></div>
            <div class="modal-header border-0">
                <h6 class="modal-title">Заполнение анкеты</h6>
            </div>
            <div class="modal-body pt-0" style="font-size: 14px;">
                <p class="text-justify">
                    АО "Компания по страхованию жизни "Евразия" благодарит Вас за обращение в нашу компанию и просит
                    заполнить настоящее Заявление. Представленная Вами информация ляжет в основу договора страхования.
                    От полноты Ваших ответов зависит правильность оценки риска нашими специалтсами и стоимость
                    страхования. Просим Вас заполнить ВСЕ графы настоящего заявления масимально подробно для получения
                    всей информации об объекте страхования. Заявление-анкета должна быть подписана Страхователем
                    собственноручно.
                </p>
                <table class="table table-bordered mb-0">
                    <tr class="form-tr-title table-primary">
                        <td scope="row">1. Заявитель:</td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Фамилия</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-surname" value="{{Auth::user()->surname}}">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Имя</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-name" value="{{Auth::user()->name}}">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Отчество</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-lastname" value="{{Auth::user()->lastname}}">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">ИИН</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-iin" value="{{Auth::user()->iin}}">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Тип документа</td>
                        <td>
                            <div onselectstart="return false;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="profile-docType" name="docType" value="2">
                                    <label class="custom-control-label" for="profile-ipdl">
                                        <span class="radio-title">Паспорт</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" checked class="custom-control-input" id="profile-docType-2" name="docType" value="1">
                                    <label class="custom-control-label" for="profile-docType-2">
                                        <span class="radio-title">Удостоверение личности</span>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Номер документа, удостоверяющего личность.</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-number" value="">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Кем выдан</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-givenBy" value="">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Дата выдачи документа.</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-givenDate" value="{{date('d.m.Y')}}">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Действителен до.</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-ExpirationDate" value="{{date('d.m.Y')}}">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Признак резиденства</td>
                        <td>
                            <form onselectstart="return false;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" checked class="custom-control-input" id="profile-residence" name="profile-residence" checked value="1">
                                    <label class="custom-control-label" for="profile-residence">
                                        <span class="radio-title">Резидент</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="profile-residence-1" name="profile-residence" value="0">
                                    <label class="custom-control-label" for="profile-residence-1">
                                        <span class="radio-title">Нерезидент</span>
                                    </label>
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Страна резиденства</td>
                        <td>
                            <select class="custom-select form-select" id="profile-country">
                                <option value="kz">Казахстан</option>
                                <option value="ru">Россия</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Является ИПДЛ*</td>
                        <td>
                            <div onselectstart="return false;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="profile-ipdl" name="ipdl" value="2">
                                    <label class="custom-control-label" for="profile-ipdl">
                                        <span class="radio-title">Да</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" checked class="custom-control-input" id="profile-ipdl-2" name="ipdl" value="1">
                                    <label class="custom-control-label" for="profile-ipdl-2">
                                        <span class="radio-title">Нет</span>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Адрес регистраций</td>
                        <td>
                            <textarea class="form-control form-textarea" rows="3" id="profile-address" required></textarea>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Адрес практического пребывания</td>
                        <td>
                            <textarea class="form-control form-textarea" rows="3" id="profile-address-fact" required></textarea>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Контактный телефон</td>
                        <td>
                            <input type="text" class="form-control form-input" id="profile-phone" value="{{Auth::user()->phone}}" autocomplete="phone" required>
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Эл.почта</td>
                        <td>
                            <input type="email" class="form-control form-input" id="profile-email">
                        </td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Цель и характер деловых отношений</td>
                        <td>
                            <div onselectstart="return false;">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" checked class="custom-control-input" id="profile-aim" name="profile-aim" value="1">
                                    <label class="custom-control-label" for="profile-aim">
                                        <span class="radio-title">Срочное стахование</span>
                                    </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="table table-primary table-bordered mt-3 mb-0" style="font-size: 14px;">
                    <tr class="form-tr-title">
                        <td scope="row">2. Условия страхования:</td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Срок страхования</td>
                        <td id="profile-date-view" id="profile-date-view">{{date('d.m.Y')}}</td>
                    </tr>
                    <tr class="form-tr">
                        <td scope="row">Страховая сумма</td>
                        <td id="profile-sum-view" id="profile-sum-view">0.00 ₸</td>
                    </tr>
                </table>
                <p class="text-justify mt-3">
                    ИПДЛ* - лицо, назначаемое или избираемое, занимающее какую-либо должность в законодательном, исполнительном, административном, судебном органах или вооруженных силах иностранного государства, а также выполняющее какую-либо публичную функцию для иностранного государство.
                </p>
                <h6 class="text-center">Декларация страхователя</h6>
                <p class="text-justify mt-3">
                    Настоящим заявляю, что, насколько мне известно, ответы, данные вопросы Заявления являются правдой, и вся сущетсвенная информация в соответствии с требованиями Страховщика нами предоставлена. В соответствии со ст.832 и 839 ГК РК предоставление заведомо ложных сведений при заключении Договора страхования может послужить основанием для предъявление требования о признании Договора страхования недействительным или повлечь отказ в осуществлении страховой выплаты. Настоящим подтверждаю, что каждая страница Заявления - анкета мною прочитана и тщательно заполнена. Не заполнение какого-либо пункта расцениваются как сокрытие информации Страхователя от страховщика.
                </p>
                <p class="text-justify mt-3">
                    Я согласен на заключение Договора с АО "Компания по страхованию жизни "Евразия" и подтверждаю, что заключение Договора является моим вольеизъявлением<br>
                    Я согласен в дальнейшем, что сведения, указанные в настоящей форме "Заявление на страхование" будут являться основанием для заключения договора страхования, и если какое-либо сведение будет заведомо ложным, Страховщик имеет право отказать в осуществлении страховой выплаты независимо от того, кто производил за меня запись<br>
                    Я согласен с тем, что Страховщик имеет право на основании данных, указанных в форме "Заявление на страхование" пересмотреть тариф страхования или отказать мне в страховании<br>
                    Я подтверждаю, что я ознакомлен с условиями страхования по данному продкуту и с Правилами страхования.
                </p>
                <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" class="custom-control-input" id="profile-rule" name="profile-rule">
                    <label class="custom-control-label" for="profile-rule">
                        <span class="radio-title">
                            Настоящим заявляю, что настоящее Заявление заполнено в целях заключения Договора страхования и является неотъемлемой частью Договора страхования.
                        </span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" class="custom-control-input" id="profile-rule-1" name="profile-rule-1">
                    <label class="custom-control-label" for="profile-rule-1">
                        <span class="radio-title">
                            Я подтверждаю, что все сведения, указанные мною, являются достоверными и полными, и я буду информировать Страховщика обо всех изменениях, указанных в заявлении на страхования в течение 10 дней.
                        </span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" class="custom-control-input" id="profile-rule-2" name="profile-rule-2">
                    <label class="custom-control-label" for="profile-rule-2">
                        <span class="radio-title">
                             Я подтверждаю, что я не состою на диспансерном учете, не получаю лечение и не страдаю в настоящее время какими - либо заболеваниями, не имею инвалидности 1, 2, 3 группы.
                        </span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mt-3">
                    <input type="checkbox" class="custom-control-input" id="profile-rule-3" name="profile-rule-3">
                    <label class="custom-control-label" for="profile-rule-3">
                        <span class="radio-title">
                             С условиями и правилами страхования ознакомлен, согласен.
                        </span>
                    </label>
                </div>
                <p class="text-justify mt-3">
                    Уведомление, Страховщик оставляет за собой право отказать в страховой выплате и/или признать договор страхования недействительным в случае, если Страхователь настоящим привел ложные сведения либо утаил какую бы то ни было существенную информацию в целях заключения договора страхования. В соответствии с этим, приложите все возможные усилия для того, чтобы гарантировать верность заполнения настоящей формы в каждом отдельном ее пункте.
                </p>
            </div>
            <div class="modal-footer table-Active">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-secondary btn-login product-btn" data-dismiss="modal">
                                Закрыть
                            </button>
                        </div>
                        <div class="col-8">
                            <button type="button" class="btn btn-success btn-login product-btn disabled" id="profile-btn">
                                Заключенить договор и оплатить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.mainApp')
@section('content')
    @include('layouts.modal.success')
    <div class="page-content">
        <form id="registerForm" method="post">
            @csrf
            <div class="register">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div class="row mt-3 mt-md-0">
                                <div class="col">
                                    <h4>Создание полиса без регистрации</h4>
                                </div>
                            </div>
                            <p class="register-address mb-3">Данные о компании</p>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>БИН</p>
                                    <input required name="BIN" type="text" minlength="12" maxlength="12" placeholder="" class="form-control mt-2 mt-sm-0 typeIIN">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>Полное наименование юридического лица</p>
                                    <input required name="fullName" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <p>Резидент Казахстана</p>
                                    <div class="row  mt-3">
                                        <div class="col-6 col-sm-12" style="display: flex;">
                                            <label class="radio">
                                                <input required name="resident" value="резидент" type="radio"/>
                                                <span class="radio__text">Резидент</span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-12" style="display: flex;">
                                            <label class="radio">
                                                <input required name="resident" value="Не резидент" type="radio"/>
                                                <span class="radio__text">Не резидент</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>Банковские реквизиты</p>
                                    <input required name="requisites" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>Сектор экономики</p>
                                    <input required name="sector" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    <!--                        <select name="" class="form-control mt-2 mt-sm-0" id="">-->
                                    <!--                            <option value=""></option>-->
                                    <!--                        </select>-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>ИИН Первого руководителя</p>
                                    <input required name="IIN" type="text" minlength="12" maxlength="12" placeholder="" class="form-control mt-2 mt-sm-0 typeIIN">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>ФИО Первого руководителя</p>
                                    <input required name="FIO" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>Дата рождения Первого руководителя</p>
                                    <!--                                <input required name="birthDate" type="date" min="1900-01-01" max="2100-12-31" placeholder="" class="form-control mt-2 mt-sm-0">-->
                                    <input required name="birthDate" type="text" autocomplete="off" class="form-control mt-2 mt-sm-0 datetimepicker">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>ИИН Бенифициарного собственника</p>
                                    <input required name="IIN2" type="text" minlength="12" maxlength="12" placeholder="" class="form-control mt-2 mt-sm-0 typeIIN">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>ФИО Бенифициарного собственника</p>
                                    <input required name="FIO2" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>Дата рождения Бенифициарного собственника</p>
                                    <input required name="birthDate2" type="text" autocomplete="off" class="form-control mt-2 mt-sm-0 datetimepicker">
                                </div>
                            </div>
                            <p class="register-address mt-5">Адрес места нахождения в соответствии с документом, подтверждающим регистрацию</p>
                            <div class="row mt-4">
                                <div class="col-12 col-sm-6">
                                    <p>Страна</p>
                                    <input required name="country" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>Почтовый индекс</p>
                                    <input name="index" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    <!--                        <select name="" class="form-control mt-2 mt-sm-0" id="">-->
                                    <!--                            <option value=""></option>-->
                                    <!--                        </select>-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>Населенный пункт</p>
                                    <input required name="addressCity" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>Улица / район</p>
                                    <input required name="addressDist" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    <!--                        <select name="" class="form-control mt-2 mt-sm-0" id="">-->
                                    <!--                            <option value=""></option>-->
                                    <!--                        </select>-->
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>Номер здания</p>
                                    <input required name="addressNum" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>Телефон</p>
                                    <input required name="phone" type="text" placeholder="" class="form-control mt-2 mt-sm-0 phone">
                                </div>
                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                    <p>Адрес электронной почты</p>
                                    <input required name="email" type="email" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-6">
                                    <p>По ПОД/ФТ</p>
                                    <input required name="POD" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <p>Является ли первый руководитель / Бенефициарный собственник иностранным публичным
                                        должностным лицом, политическим деятелем или государственным служащим иностранного
                                        государства?</p>
                                    <div class="row mt-3">
                                        <div class="col-6 col-sm-12" style="display: flex;">
                                            <label class="radio">
                                                <input required name="foreigner" value="Да" type="radio"/>
                                                <span class="radio__text">Да</span>
                                            </label>
                                        </div>
                                        <div class="col-6 col-sm-12" style="display: flex;">
                                            <label class="radio">
                                                <input required name="foreigner" value="Нет" type="radio"/>
                                                <span class="radio__text">Нет</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register_colored mt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-9 mt-3 mb-3">
                                <p class="register-address mb-3 mt-3">Данные о туристе</p>
                                <div class="row mt-3">
                                    <div class="col">
                                        <p>Период страхования</p>
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <input required name="insuranceFrom" type="text" autocomplete="off" class="form-control mt-2 mt-sm-0 datetimepicker">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <input required name="insuranceTo" type="text" autocomplete="off" class="form-control mt-2 mt-sm-0 datetimepicker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <p>Территория страхования</p>
                                        <input required name="territory" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    </div>
                                </div>
                                <p class="mt-3">Резидент Казахстана</p>
                                <div class="row mt-3">
                                    <div class="col-6 col-sm-12" style="display: flex;">
                                        <label class="radio">
                                            <input required name="resident2" value="Резидент" type="radio"/>
                                            <span class="radio__text">Резидент</span>
                                        </label>
                                    </div>
                                    <div class="col-6 col-sm-12" style="display: flex;">
                                        <label class="radio">
                                            <input required name="resident2" value="Не резидент" type="radio"/>
                                            <span class="radio__text">Не резидент</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <p>Фамилия</p>
                                        <input required name="touristSurname" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <p>Имя</p>
                                        <input required name="touristName" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <p>Дата рождения</p>
                                        <input required name="touristBirthDate" type="text" autocomplete="off" class="form-control mt-2 mt-sm-0 datetimepicker">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <p>ИИН</p>
                                        <input required name="touristIIN" type="text" minlength="12" maxlength="12" placeholder="" class="form-control mt-2 mt-sm-0 typeIIN">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <p>Место жительства</p>
                                        <input required name="touristBirthDate" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <p>Тип документа</p>
                                        <select name="touristPass" id="" class="form-control mt-2 mt-sm-0">
                                            <option value="Паспорт">Паспорт</option>
                                            <option value="Удостоверение">Удостоверение</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <p>Номер документа</p>
                                        <input required name="touristDocNum" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <p>Дата выдачи документа</p>
                                        <input required name="touristDocDate" type="text" autocomplete="off" class="form-control mt-2 mt-sm-0 datetimepicker">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <p>E-mail</p>
                                        <input required name="touristEmail" type="text" placeholder="" class="form-control mt-2 mt-sm-0">
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <p>Номер телефона</p>
                                        <input required name="touristPhone" type="text" placeholder="" class="form-control phone mt-2 mt-sm-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9">
                            <div class="row mt-3 mb-5">
                                <div class="col">
                                    <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
                                    <button class="btn btn_d mr-md-3 col-12 col-sm-5 col-md-3">Отменить</button>
                                    <button id="submitForm" type="submit" class="btn btn_a col-12 col-sm-5 col-md-3 mt-3 mt-sm-0">Продолжить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?render=6LfrS7YUAAAAAL2iwWw7CnxVdnGyY-8DEVvHc_7c"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LfrS7YUAAAAAL2iwWw7CnxVdnGyY-8DEVvHc_7c', {action: 'homepage'}).then(function(token) {
                //console.log(token);
                document.getElementById('g-recaptcha-response').value=token;
            });
        });
    </script>
@endsection

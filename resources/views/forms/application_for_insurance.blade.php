<section class="green-bg round-top round-bottom">
    <div class="container">
        <div class="row my-5 request-wrap" id="form">
            <div class="col-12 col-md-8 pt-4 order-2 order-md-1">
                <h2>{{__('main.application_for_insurance')}}</h2>
                <p>{{__('main.title_13')}}</p>
                <form id="w0" class="form-inline request-form" action="{{$url}}" method="post">
                    @csrf
                    <div class="row form-wrap">
                        <div class="col-12 col-md-6">
                            <div class="form-group field-request-2-phone required">
                                <label class="control-label mb-2 sr-only" for="request-2-phone">{{__('main.phone_number')}}</label>
                                <input type="tel" id="request-2-phone" class="form-control mb-md-2 request-form__phone" name="request-2[phone]" maxlength="18" placeholder="+7 (___) ___-__-__" aria-required="true">
                                <p class="help-block help-block-error"></p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <button type="submit" class="btn btn_a mb-2 px-0 px-md-3 request-form__btn">{{__('main.send_request')}}</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4 order-1 order-md-2">
                <div class="mediator">
                    <span class="mediator__text">{{__('main.title_14')}}</span>
                    <br>
                    <img src="/img/logo_1.svg" width="44" height="42">
                </div>
            </div>
        </div>
    </div>
</section>

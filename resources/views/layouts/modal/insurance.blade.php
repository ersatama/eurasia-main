<div class="modal fade" style="font-size: 16px;" id="{{$id}}" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content overflow-hidden">
            <div class="product__img product__img__modal {{$img}}"></div>
            <div class="modal-header border-0">
                <h6 class="modal-title">{{$title}}</h6>
            </div>
            <div class="modal-body pt-0">
                @if(isset($data))
                    <input type="hidden" id="data" value="{{$data}}">
                @endif
                <input type="hidden" id="{{$id}}-img" value="{{$img}}">
                <table class="table table-bordered mb-0" style="font-size: 14px;">
                    <tbody>
                        @foreach($body as $item)
                            <tr class="form-tr">
                                <td scope="row">{{$item[0]}}</td>
                                <td>
                                    @if($item[2] === 'input')
                                        <input type="text" value="{{$item[1]}}" id="{{$id}}-{{$item[4]}}" name="{{$id}}-{{$item[4]}}" class="form-control form-input" @if($item[3]) readonly @endif @if($item[4] === 'sum') placeholder="0.00 ₸" @endif>
                                    @elseif ($item[2] === 'select')
                                        <select class="custom-select form-select" id="{{$id}}-{{$item[4]}}" @if($item[3]) readonly @endif>
                                            @for($i=0,$size=sizeof($item[1]);$i<$size;$i++)
                                                <option value="{{$i}}">{{$item[1][$i]}}</option>
                                            @endfor
                                        </select>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table table-primary table-bordered mt-3 mb-0" style="font-size: 14px;">
                    @foreach($out as $item)
                        <tr class="form-tr">
                            <td scope="row">{{$item[0]}}</td>
                            <td id="{{$id}}-{{$item[4]}}">{{$item[1]}}</td>
                        </tr>
                    @endforeach
                </table>
                <section class="section-preview mt-3 d-none">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked1">
                        <label class="custom-control-label col-form-label login-remember" for="defaultUnchecked1">Включить страховое покрытие от несчастного случая</label>
                    </div>
                </section>
            </div>
            <div class="modal-footer table-Active">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <button type="button" class="btn btn-secondary btn-login product-btn" data-dismiss="modal">Закрыть</button>
                        </div>
                        <div class="col-8">
                            <button type="button" class="btn btn-primary btn-login product-btn {{$id}} disabled">Перейти к заполнению анкеты</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

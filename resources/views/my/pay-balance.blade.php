@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-3 d-flex justify-content-center">
            <div class="col-md-4">
                <h3 class="title mb-4">Пополнение баланса</h3>
                <!--form action="" class="form form-pay">
                    <div class="form-group">
                        <label for="">Введите сумму</label>
                        <input type="number" class="form-control mt-2">
                        <div class="w-100 d-flex justify-content-end">
                            <input type="submit" class="btn btn-primary mt-3" value="Пополнить">
                        </div>
                        <p class="mt-4">Пополнение проходит на стороне электронной коммерции.</p>
                        <p>Сайт не сохраняет никаких данных.</p>
                        <p>Запросить возврат средств можно на главной странице сайта в разделе "Контакты", обратившись
                            в
                            <a href="/contacts" style="font-size: 14.4px;font-family: 'Montserrat' !important;font-weight: 100;margin-left: 0px;
                                                        text-transform: none;">
                                техническую поддержку сайта</a>.</p>
                    </div>
                </form-->
                <form action="" class="form form-pay">
                    <div class="form-group">
                        <p class="mt-4">Пополнение баланса временно проходит через менеджера.</p>
                        <p class="mb-0">Напишите администратору в ВК свой ID <span style='color: orange; font-weight: 400;'>{{ \Auth::user()->id}}</span> и желаемую сумму пополнения. <a href='https://vk.com/holodok05' target='_blank'>Мурад Алиев</a></p>
                        <div class='mt-2 mb-2'>
                            <a href='https://vk.com/holodok05' target='_blank'>https://vk.com/holodok05</a>
                        </div>
                        <p>Запросить возврат средств можно на главной странице сайта в разделе "Контакты", обратившись
                            в
                            <a href="/contacts" style="font-size: 14.4px;font-family: 'Montserrat' !important;font-weight: 400;margin-left: 0px;
                                                        text-transform: none;">
                                техническую поддержку сайта</a>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .form-pay {
            background: url(/assets/images/contractborder.svg);
            background-size: cover;
            background-position: center center;
            height: 400px;
            width: 420px;
            padding: 35px;
        }

        .form-pay p {
            font-weight: 400;
        }
    </style>
@endsection

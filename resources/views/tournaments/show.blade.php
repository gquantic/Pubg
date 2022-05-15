@extends('layouts.app')

@section('content')
    @php

    @endphp

    <div class="container tournament-page mt-5">
        <div class="row mb-3">
            <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div></div>
                <div>
                    <p class="mb-0">Набор и распределение будут производиться в нашем Discord канале</p>
                    <div class="w-100 d-flex justify-content-end">
                        <a href="https://discord.gg/5RsB94Sr" target="_blank" style="margin-left: 0px;">Перейти <img src="https://shinaechun.org/images/discord.png" width="20px" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @if($massPrize)
                <div class="col-md-12">
                    <p  type="button" data-bs-toggle="modal" data-bs-target="#massPrize"
                        class="mb-0" style="color: #ff3f3f;border-bottom: 1px solid;width: fit-content;font-weight: 600;cursor: pointer;">Дополнительные призы за участие</p>
                </div>
            @endif
            <div class="col-lg-6 col-md-12">
                <div class="d-flex align-items-center justify-content-start">
                    <h2 class="mb-0 pb-0 mr-5">{{ $info['tournament']['title'] }}</h2>
                </div>
                <p class="mb-3 mt-3 bg-warning p-1 rounded-3" style="width:fit-content;">
                    Стоимость входа: {{ $info['tournament']['enter_price'] }}<span class="ruble text-white">₽</span>
                </p>
                <p class="mt-2">{{ $info['tournament']['description'] }}</p>
{{--                <button class="btn btn-primary btn-fill ml-4 btn-repost d-flex align-items-center justify-content-start">--}}
{{--                    <div class="">Поделиться</div>--}}
{{--                    <img src="/assets/images/repost.svg" width="12px" style="margin-left: 5px;" alt="">--}}
{{--                </button>--}}
                <button type="button" data-bs-toggle="modal" data-bs-target="#gruntModal"
                        class="btn btn-primary btn-fill ml-4 btn-repost d-flex align-items-center justify-content-start"
                        style="background: rgba(0,0,0,0);color: #e5a65e;">
                    <div class="">Гарантии и доверие</div>
                </button>
                <!-- TIMER -->
                <h3 class="mt-5 title mb-0 text-white">До конца регистрации</h3>
                <h3 class="title mt-0" id="timer"></h3>
                <p>Регистрация будет закрыта по истечении данного времени. <br> Пожалуйста, регистрируйтесь в заранее.</p>
            </div>

            <div class="col-lg-6 col-md-12 d-flex justify-content-end">
                <div class="contract">
                    <div class="contact-body">
                        <h3>Требования</h3>
                        <div class="check">Игроков {{ $info['players'] }} / {{ $info['tournament']['players_col'] }}</div>

                        <h3 class="mt-4">Награды</h3>
                        <div class="prize">
                            <span>Первое место:</span> {{ round(($budget / 100) * $info['tournament']['first_prize']) }}<span class="ruble text-white">₽</span>
                        </div>
                        @if ($info['tournament']['second_prize'] != 0)
                            <div class="prize">
                                <span>Второе место:</span> {{ round(($budget / 100) * $info['tournament']['second_prize']) }}<span class="ruble text-white">₽</span>
                            </div>
                        @endif
                        @if ($info['tournament']['third_prize'] != 0)
                            <div class="prize">
                                <span>Третье место:</span> {{ round(($budget / 100) * $info['tournament']['third_prize']) }}<span class="ruble text-white">₽</span>
                            </div>
                        @endif

                        @if($isRegisteredOnTournament > 0)
                            <button class="btn btn-primary btn-fill" disabled>
                                Вы уже зарегистрированы
                            </button>
                        @else
                            <button class="btn btn-primary btn-fill" onclick="window.location.href = '/tournaments/enter/{{ $info['tournament']['id'] }}'">
                                зарегистрироваться
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-3">
                <img src="{{ asset('/assets/images/continue.svg') }}" class="mt-5" width="400px" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="title text-center mb-5 mt-3">Подробности</h3>
            </div>
            <div class="col-lg-5 col-md-12">
                <img src="{{ $card->card }}" class="rounded-3" width="100%" alt="">
            </div>
            <div class="col-lg-7 col-md-12">
                <p class="mb-1">Карта "{{ $card->card_name }}"</p>
                <p class="mb-1">Игроков {{ $info['players'] }} / {{ $info['tournament']['players_col'] }}</p>
            </div>
        </div>
    </div>

    <!-- Доверие и гарантии -->
    <div class="modal fade" id="gruntModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Гарантии и доверие</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-1"><b>CyGreat</b> - сайт совсем молодой, выпущенный <b>12 мая</b>.</p>
                    <p class="mb-1">На данный момент нам совсем тяжко поддерживать сайт благодаря недоверию людей к сайту,
                        на сайте регистрируется масса людей, из которых 80% не решаются пополнить баланс и зарегистрироваться в турнире. </p>
                    <p class="mb-0">Не смотря на это, к сожалению,
                        пока мы не можем сделать ничего, кроме теплых слов и слов о правдивости турниров. </p>
                    <p class="mb-0">Мы очень надеемся на понимание наших пользователей... </p>

                    <br>

                    <p class="mb-0">При недоборе игроков на турнир мы будем переорганизовывать этот турнир на следующие даты, исходя
                        из <b>пожеланий участников</b>.</p>

                    <br>

                    <p>Тут мы оставим ссылки на нас и Discord канал:</p>
                    <ul>
                        <li><a href="https://discord.gg/5RsB94Sr" target="_blank">Наш Discord</a></li>
                        <li><a href="https://vk.com/cygreat" target="_blank">Группа ВКонтакте</a></li>
                        <li><a href="https://vk.me/cygreat" target="_blank">Написать в группу ВКонтакте</a></li>
                        <li><a href="https://vk.com/holodok05" target="_blank">Главный администратор</a></li>
                        <li><a href="https://vk.com/zvat_ne_nado" target="_blank">Менеджер</a></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    @if($massPrize)
        <!-- Дополнительный приз -->
        <div class="modal fade" id="massPrize" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Приз за участие</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-1">За участие в турнире предусмотрена дополнительная награда.</p>

                        <br>

                        <p>Для участия необходимо:</p>
                        <ul>
                            <li>Зарегистрироваться в турнире</li>
                            <li>Больше ничего не надо :) <br> Да, вот так вот просто, а ниже сам приз</li>
                        </ul>

                        <div class="p-3 mt-2" style="border: 1px solid #fff;">
                            <h5 style="color: #e5a65e;">{{ $massPrize->title }}</h5>
                            <p class="mb-0">{{ $massPrize->description }}</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

<script src="/js/end.js"></script>
<script>
    // Функция для вычисления разности времени
    function diffSubtract(date1, date2) {
        return date2 - date1;
    }

    function setNewTimer(element, end_date) {
        // Строка для вывода времени
        let end_date_str = `${end_date.full_year}-${end_date.month}-${end_date.day}T${end_date.hours}:${end_date.minutes}:${end_date.seconds}`;

        // Запуск интервала таймера
        timer = setInterval(function () {
            // Получение времени сейчас
            let now = new Date();

            // Получение заданного времени
            let date = new Date(end_date_str);

            // Вычисление разницы времени
            let ms_left = diffSubtract(now, date);

            // Если разница времени меньше или равна нулю
            if (ms_left <= 0) { // То
                // Выключаем интервал
                clearInterval(timer);

                // Выводим сообщение об окончание
                alert("Время закончилось");
            } else { // Иначе
                // Получаем время зависимую от разницы
                let res = new Date(ms_left);

                // Делаем строку для вывода
                let str_timer = `${res.getUTCMonth()} м. ${res.getUTCDate() - 1} д. ${res.getUTCHours() - 1}:${res.getUTCMinutes()}:${res.getUTCSeconds()}`;

                // Выводим время
                document.getElementById(element).innerHTML = str_timer;
            }
        }, 1000);
    }

    let php_date = '{{ $info['tournament']['end_date'] }}';

    console.log(php_date);

    // Массив данных о времени
    let end_date = {
        "full_year": php_date.slice(0, 4), // Год
        "month": php_date.slice(5, 7), // Номер месяца
        "day": php_date.slice(8, 10), // День
        "hours": php_date.slice(11, 13), // Час
        "minutes": "00", // Минуты
        "seconds": "00" // Секунды
    }

    console.log(end_date);

    setNewTimer('timer', end_date);
</script>

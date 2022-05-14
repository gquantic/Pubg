@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row d-flex justify-content-center">
            @if($isRegisteredOnTournament > 0)
                <div class="col-6 mt-3 mb-2">
                    <div class="card p-3 rounded-2">
                        <div class="borders-styled"></div>
                        <form style="height: 400px;display: flex;flex-direction:column;align-items: center;justify-content: center;text-align: center;">
                            <h3 class="title text-white">Вы уже зарегистрированы на данный турнир!</h3>
                            <a href="/home">Вернуться на главную</a>
                        </form>
                    </div>
                </div>
            @else
                <div class="col-xl-6 col-lg-12 mt-3 mb-2">
                    <h3 class="title mb-3">Регистрация на турнир</h3>
                    <div class="card p-3 rounded-2">
                        <div class="borders-styled"></div>
                        <form action="{{ route('players.store') }}" method="post">
                            @csrf
                            <input type="text" value="{{ $tournament->id }}" name="tournament_id" hidden>
                            <div class="form-group">
                                <label for="" class="mb-2">Ник в игре с учетом регистра</label>
                                <input type="text" class="form-control" name="user_name" placeholder="YourNotorious" required>
                                <p class="text-muted mt-2 mb-0">После покупки пропуска, Вы сможете войти только под аккаунтом, никнейм
                                    которого указали в этом поле. <b>Будьте внимательны!</b></p>
                            </div>

                            <div class="form-group mt-3">
                                <label for="" class="mb-2">ID в игре</label>
                                <input type="text" class="form-control" name="user_id" placeholder="59902752" required>
                                <p class="text-muted mt-2 mb-0">После покупки пропуска, Вы сможете войти только под аккаунтом, ID
                                    которого указали в этом поле. <b>Будьте внимательны!</b></p>
                            </div>

                            <div class="form-group mt-3">
                                <label>Даты проведения турнира:</label>
                                <h3 class="mt-0 mb-0 primary-text" style="font-family: 'Artis';">
                                    {{ substr(str_replace('-', '.', $tournament->start_date), 0, 10)
                                        .' - '.
                                        substr(str_replace('-', '.', $tournament->end_date), 0, 10) }}
                                </h3>
                            </div>

                            <button type="submit" class="btn btn-primary btn-fill mt-4" style="width:100%;height:45px;font-size: 17px;font-weight: 500;"
                                @if(Auth::user()->balance < $tournament->enter_price) disabled @endif>
                                    @if(Auth::user()->balance < $tournament->enter_price) Не достаточно средств @else Принять участие @endif
                            </button>
                            @if(Auth::user()->balance < $tournament->enter_price) 
                                <div style="width: 100%;text-align:center; margin: 12px 0;">
                                    <a href="/pay-balance" style='text-align: center;' target='_blank'>Перейти к пополнению</a>
                                </div>
                            @endif
                            <p class="text-center mb-0 mt-3">
                                С Вашего счёта <b>будет списано {{ $tournament->enter_price }}<span class="mr-3" style="font-size: 11px;display: inline">₽</span></b>
                                за регистрацию
                            </p>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

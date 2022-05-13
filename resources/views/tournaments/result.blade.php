@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h3 class="title">
                    Турнир начался
                </h3>

                @isset($gameInfo)
                    <a href="{{ route('tournaments.index') }}">Показать турниры по всем играм</a>
                @endisset
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h5>Игроки</h5>
            </div>
            <div class="col-12 mt-1">
                <div class="d-flex flex-wrap justify-content-start">
                    @foreach($tournamentPlayers as $player)
                        <a href="/player/{{ $player->id  }}" class="m-0">
                            <button class="btn btn-primary">{{ $player->nickname }}</button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="alert alert-warning">
                    Победителям придёт уведомление на почту и в личный кабинет.
                </div>
            </div>
        </div>
    </div>
@endsection
